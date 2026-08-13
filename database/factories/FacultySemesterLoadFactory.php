<?php

namespace Database\Factories;

use App\Models\FacultySemesterLoad;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Faculty;
use App\Models\AcademicTerm;

/**
 * @extends Factory<FacultySemesterLoad>
 */
class FacultySemesterLoadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $seed = 4;

        return [
            'faculty_id' => Faculty::inRandomOrder($seed)->first()->id,
            'academic_term_id' => AcademicTerm::inRandomOrder($seed)->first()->id,
            'assigned_units' => fake()->randomFloat(1, 3, 24)
        ];
    }
}
