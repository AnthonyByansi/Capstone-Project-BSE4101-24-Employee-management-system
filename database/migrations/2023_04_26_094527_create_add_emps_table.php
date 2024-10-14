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
        Schema::create('add_emps', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('country');
            $table->date('working_start_date');
            $table->string('job_title');
            $table->string('job_type');
            $table->string('currency');
            $table->string('frequency');
            $table->date('payment_start_date');
            $table->foreign('team')->references('team')->on('salary_scale')->onDelete('cascade');
            $table->string('office');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('add_emp');
    }
};
