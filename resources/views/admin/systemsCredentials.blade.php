@extends('admin.tw.layout')
@section('title','System Credentials')
@section('content')
	<div class="mb-5 flex items-center justify-between">
		<div class="flex items-center gap-2">
			<span class="inline-flex h-9 w-9 items-center justify-center rounded-md bg-purple-100 text-purple-700 ring-1 ring-purple-200">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5"><path d="M12 2a10 10 0 100 20 10 10 0 000-20zM8 12h8v2H8v-2z"/></svg>
			</span>
			<h2 class="text-lg font-semibold">System Credentials</h2>
		</div>
	</div>

	<div class="rounded-xl bg-white ring-1 ring-gray-200">
		<div class="overflow-x-auto">
			<table class="min-w-full divide-y divide-gray-200 text-sm">
				<thead class="bg-gray-50 text-left text-gray-600">
					<tr>
						<th class="px-4 py-3 font-medium">Key</th>
						<th class="px-4 py-3 font-medium">Value</th>
					</tr>
				</thead>
				<tbody class="divide-y divide-gray-100">
					@foreach(($SiteSettings ?? []) as $s)
						<tr>
							<td class="px-4 py-3 text-gray-800 font-medium">{{ $s->key ?? $s->name ?? 'Setting' }}</td>
							<td class="px-4 py-3 text-gray-600">{{ $s->value ?? $s->content ?? '' }}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection


