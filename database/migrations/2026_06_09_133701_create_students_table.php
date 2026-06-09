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
        Schema::create('students', function (Blueprint $table) {
            $table->id();

            $table->string('id_number')->length(8);
            $table->string('serial_number')->nullable()->default(null);
            $table->integer('year_graduated')->nullable()->defaut(null);

            // enrollment data
            $table->foreignId('college_program_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('student_section_id')->constrained()->cascadeOnDelete();
            $table->string('nstp_component')->nullable(); // enum

            // student bio
            $table->string('surname');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('suffix')->nullable();

            $table->string('sex');
            $table->date('birthdate');

            // contact
            $table->string('contact_no');
            $table->string('email_address');

            // emergency contact
            $table->string('emergency_contact_name');
            $table->string('emergency_contact_no');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
