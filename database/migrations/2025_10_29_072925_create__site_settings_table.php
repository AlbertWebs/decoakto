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
        Schema::create('_site_settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sitename', 191)->nullable();
            $table->string('logo', 191)->nullable();
            $table->string('logo_footer', 191)->nullable();
            $table->string('logo_two')->nullable();
            $table->string('favicon')->nullable();
            $table->string('email', 191)->nullable();
            $table->string('email_one')->nullable();
            $table->string('mobile_one', 191)->nullable();
            $table->string('mobile_two', 191)->nullable();
            $table->string('mpesa')->nullable();
            $table->string('paypal')->nullable();
            $table->string('tagline', 191)->nullable();
            $table->string('url', 191)->nullable();
            $table->string('location', 191)->nullable();
            $table->text('map')->nullable();
            $table->string('address', 191)->nullable();
            $table->string('facebook', 191)->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('telegram')->nullable();
            $table->string('twitter', 191)->nullable();
            $table->string('linkedin', 191)->nullable();
            $table->string('instagram', 191)->nullable();
            $table->string('youtube', 191)->nullable();
            $table->string('google', 191)->nullable();
            $table->text('risks')->nullable();
            $table->text('welcome')->nullable();
            $table->text('tawkTo')->nullable();
            $table->tinyInteger('tawkToStatus')->default(1);
            $table->tinyInteger('whatsAppStatus')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_site_settings');
    }
};
