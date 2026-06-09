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
        Schema::create('student_sections', function (Blueprint $table) {
            $table->id();

            $table->integer('capacity')->nullable();
            $table->string('barangay_assigned')->nullable();

            $table->foreignId('academic_term_id')->constrained()->cascadeOnDelete();

            $table->foreignId('faculty_id')->nullable()->constrained()->nullOnDelete();

            $table->timestamps();

            $table->unique(['name', 'academic_year', 'semester'], 'unique_section_term');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_sections');
    }
};
