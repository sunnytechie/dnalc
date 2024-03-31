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
            $table->text('othersource')->nullable();
            $table->string('scholarshiprequestamount')->nullable();
            $table->text('scholarshipreason')->nullable();
            $table->longText('question1')->nullable();
            $table->longText('question2')->nullable();
            $table->longText('question3')->nullable();
            $table->longText('question4')->nullable();
            $table->longText('question5')->nullable();
            $table->string('status')->default('pending');
            $table->string('role')->nullable();
            $table->text('address')->nullable();
            $table->text('area')->nullable();
            $table->string('reference')->nullable();
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
