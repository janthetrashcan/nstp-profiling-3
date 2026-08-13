<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AcademicTerm;

class AcademicTermSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AcademicTerm::create([
            'academic_year' => '2026-2027',
            'semester' => 1,
            'is_current' => true,
            'is_grading_open' => true,
        ]);
    }
}
