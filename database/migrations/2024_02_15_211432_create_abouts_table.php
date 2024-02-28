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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->longText('description');
            $table->text('heading_1')->nullable();
            $table->longText('content_1')->nullable();
            $table->text('heading_2')->nullable();
            $table->longText('heading_2_content')->nullable();
            $table->longText('content')->nullable();
            $table->text('list_1')->nullable();
            $table->text('list_2')->nullable();
            $table->text('list_3')->nullable();
            $table->text('thumbnail')->nullable();
            $table->text('thumbnail_2')->nullable();

            $table->string('phone')->nullable();
            $table->string('phone_2')->nullable();
            $table->string('email')->nullable();
            $table->string('email_2')->nullable();
            $table->string('address')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('linkedin')->nullable();

            $table->string('sunday_schedule')->default('Closed');
            $table->string('monday_schedule')->default('8:00 AM - 5:00 PM');
            $table->string('tuesday_schedule')->default('8:00 AM - 5:00 PM');
            $table->string('wednesday_schedule')->default('8:00 AM - 5:00 PM');
            $table->string('thursday_schedule')->default('8:00 AM - 5:00 PM');
            $table->string('friday_schedule')->default('8:00 AM - 5:00 PM');
            $table->string('saturday_schedule')->default('Closed');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
