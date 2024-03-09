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
        Schema::table('workshopapplications', function (Blueprint $table) {
            $table->unsignedBigInteger('workshop_id');
            $table->string('fullname')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('country')->nullable();
            $table->string('institution')->nullable();
            $table->string('scholarship')->nullable();
            $table->string('info_source')->nullable();
            $table->string('referral')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('workshopapplications', function (Blueprint $table) {
            //
        });
    }
};
