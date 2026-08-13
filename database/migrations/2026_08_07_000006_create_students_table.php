<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('id_number')->unique()->nullable();
            $table->string('serial_number')->nullable();
            $table->foreignId('college_program_id')->nullable()->constrained('college_programs')->nullOnDelete();
            $table->foreignId('nstp_component_id')->nullable()->constrained('nstp_components')->nullOnDelete();
            $table->integer('year_graduated')->nullable();
            $table->string('surname');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('sex')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('contact_no')->nullable();
            $table->string('emergency_contact_name')->nullable();
            $table->string('emergency_contact_no')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
