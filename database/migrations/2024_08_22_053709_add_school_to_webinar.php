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
        Schema::table('webinars', function (Blueprint $table) {
            $table->string('event_date')->nullable();
            $table->longText('description')->nullable();
            $table->string('school')->default('cedfoci');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('webinars', function (Blueprint $table) {
            //
        });
    }
};