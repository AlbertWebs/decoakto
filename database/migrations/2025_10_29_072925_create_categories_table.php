<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->integer('order')->nullable();
            $table->integer('has_products')->nullable()->default(0);
            $table->string('name')->nullable();
            $table->string('slung')->nullable();
            $table->text('meta')->nullable();
            $table->text('content')->nullable();
            $table->text('thicknesses')->nullable();
            $table->text('a_c_ratings')->nullable();
            $table->text('color')->nullable();
            $table->text('species')->nullable();
            $table->string('heading_two')->nullable();
            $table->string('heading_two_section')->nullable();
            $table->text('content_two')->nullable();
            $table->string('content_two_image')->nullable();
            $table->text('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
