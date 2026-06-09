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
        Schema::create('faculties', function (Blueprint $table) {
            $table->id();

            $table->string('employee_id');

            $table->string('surname');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('suffix');

            $table->string('sex');
            $table->date('birthdate');
            $table->string('contact_no');
            $table->string('email_address');

            $table->integer('teaching_year_start');
            $table->integer('nstp_teaching_year_start');

            $table->string('employment_status');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faculties');
    }
};
