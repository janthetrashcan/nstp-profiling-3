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
        Schema::create('student_addresses', function (Blueprint $table) {
            $table->id();

            $table->foreignId('student_id')->nullable()->constrained()->nullOnDelete();

            $table->string('type');
            $table->string('house_no')->nullable();
            $table->string('street')->nullable();
            $table->string('city');
            $table->string('province');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_addresses');
    }
};
