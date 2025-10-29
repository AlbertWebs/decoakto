<?php

use Illuminate\Foundation\Console\ClosureCommand;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

Artisan::command('inspire', function () {
    /** @var ClosureCommand $this */
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('iseed:all {--exclude=} {--force}', function () {
    /** @var ClosureCommand $this */
    $exclude = collect(explode(',', (string) $this->option('exclude')))
        ->filter()
        ->map(fn ($v) => trim($v))
        ->values()
        ->all();

    // Get all table names (MySQL)
    $tables = collect(DB::select('SHOW TABLES'))
        ->map(function ($row) {
            $values = array_values((array) $row);
            return $values[0] ?? null;
        })
        ->filter()
        ->filter(fn ($t) => !in_array($t, array_merge(['migrations'], $exclude)))
        ->values()
        ->all();

    if (empty($tables)) {
        $this->error('No tables found to seed.');
        return 1;
    }

    $tablesCsv = implode(',', $tables);
    $this->info('Generating iSeed seeders for tables:');
    $this->line($tablesCsv);

    $exitCode = Artisan::call('iseed', [
        'tables' => $tablesCsv,
        '--force' => (bool) ($this->option('force') ?? true),
    ]);

    $this->line(Artisan::output());
    return $exitCode;
})->purpose('Generate iSeed seeders for all database tables (exclude with --exclude)');

Artisan::command('models:generate {--tables=} {--namespace=App\\Models} {--path=app/Models} {--force}', function () {
    /** @var ClosureCommand $this */
    $exclude = ['migrations'];
    $specified = collect(explode(',', (string) $this->option('tables')))
        ->filter()
        ->map(fn ($t) => trim($t))
        ->values()
        ->all();

    $namespace = (string) $this->option('namespace') ?: 'App\\Models';
    $path = (string) $this->option('path') ?: 'app/Models';
    $force = (bool) ($this->option('force') ?? false);

    if (!File::exists(base_path($path))) {
        File::makeDirectory(base_path($path), 0755, true);
    }

    $allTables = collect(DB::select('SHOW TABLES'))
        ->map(function ($row) { $values = array_values((array) $row); return $values[0] ?? null; })
        ->filter()
        ->reject(fn ($t) => in_array($t, $exclude));

    $tables = empty($specified) ? $allTables->values()->all() : array_values(array_intersect($allTables->all(), $specified));

    if (empty($tables)) {
        $this->error('No tables found to generate models for.');
        return 1;
    }

    foreach ($tables as $table) {
        $columns = collect(DB::select("SHOW FULL COLUMNS FROM `{$table}`"))
            ->map(function ($col) { return (array) $col; });

        // Primary key detection
        $primaryKeys = collect(DB::select("SHOW KEYS FROM `{$table}` WHERE Key_name = 'PRIMARY'"))
            ->map(fn ($r) => (array) $r);
        $primaryKey = $primaryKeys->first()['Column_name'] ?? 'id';

        // Auto increment detection (via DESCRIBE extra)
        $describe = collect(DB::select("DESCRIBE `{$table}`"))->map(fn ($r) => (array) $r);
        $pkRow = $describe->firstWhere('Field', $primaryKey) ?: [];
        $autoIncrement = isset($pkRow['Extra']) && str_contains((string) $pkRow['Extra'], 'auto_increment');

        // Timestamps & soft deletes
        $hasCreated = $columns->firstWhere('Field', 'created_at') !== null;
        $hasUpdated = $columns->firstWhere('Field', 'updated_at') !== null;
        $hasDeleted = $columns->firstWhere('Field', 'deleted_at') !== null;

        // Fillable fields: all except PK and Laravel timestamp/deleted
        $fillable = $columns->pluck('Field')
            ->reject(fn ($f) => in_array($f, [$primaryKey, 'created_at', 'updated_at', 'deleted_at']))
            ->values()
            ->all();

        // Casts by type
        $casts = [];
        foreach ($columns as $col) {
            $field = $col['Field'];
            $type = Str::lower((string) $col['Type']);
            if (in_array($field, [$primaryKey, 'created_at', 'updated_at', 'deleted_at'])) { continue; }
            if (str_starts_with($type, 'tinyint(1)')) { $casts[$field] = 'boolean'; continue; }
            if (preg_match('/^(int|bigint|smallint|mediumint|tinyint)\b/', $type)) { $casts[$field] = 'integer'; continue; }
            if (preg_match('/^(decimal|numeric|float|double|real)\b/', $type)) { $casts[$field] = 'float'; continue; }
            if (preg_match('/\bjson\b/', $type)) { $casts[$field] = 'array'; continue; }
            if (preg_match('/\b(datetime|timestamp)\b/', $type)) { $casts[$field] = 'datetime'; continue; }
            if (preg_match('/\bdate\b/', $type)) { $casts[$field] = 'date'; continue; }
        }

        // Determine model class name
        $model = Str::studly(Str::singular($table));
        $file = base_path($path . '/' . $model . '.php');
        if (File::exists($file) && !$force) {
            $this->line("Skip {$model} (exists). Use --force to overwrite.");
            continue;
        }

        $uses = [];
        if ($hasDeleted) { $uses[] = 'Illuminate\\Database\\Eloquent\\SoftDeletes'; }

        $traits = [];
        if ($hasDeleted) { $traits[] = 'SoftDeletes'; }

        $timestampsLine = ($hasCreated && $hasUpdated) ? '' : "\n\tpublic \$timestamps = false;\n";
        $incrementingLine = $autoIncrement ? '' : "\n\tpublic \$incrementing = false;\n";
        $primaryKeyLine = ($primaryKey !== 'id') ? "\n\tprotected \$primaryKey = '{$primaryKey}';\n" : '';
        $castsExport = '';
        if (!empty($casts)) {
            $castLines = collect($casts)->map(fn ($v, $k) => "\t\t'{$k}' => '{$v}',")->implode("\n");
            $castsExport = "\n\tprotected \$casts = [\n{$castLines}\n\t];\n";
        }

        $fillableExport = '';
        if (!empty($fillable)) {
            $fillLines = collect($fillable)->map(fn ($f) => "\t\t'{$f}',")->implode("\n");
            $fillableExport = "\n\tprotected \$fillable = [\n{$fillLines}\n\t];\n";
        }

        $usesBlock = '';
        if (!empty($uses)) {
            $usesBlock = "\nuse " . implode(', ', $uses) . ";\n";
        }

        $traitsBlock = '';
        if (!empty($traits)) {
            $traitsBlock = "\n\tuse " . implode(', ', $traits) . ";\n";
        }

        $contents = <<<PHP
<?php

namespace {$namespace};

use Illuminate\\Database\\Eloquent\\Model;{$usesBlock}

class {$model} extends Model
{
\tprotected \$table = '{$table}';{$primaryKeyLine}{$incrementingLine}{$timestampsLine}{$traitsBlock}{$fillableExport}{$castsExport}
}
PHP;

        File::put($file, $contents);
        $this->info("Generated model: {$path}/{$model}.php");
    }

    return 0;
})->purpose('Generate Eloquent models from database tables.');
