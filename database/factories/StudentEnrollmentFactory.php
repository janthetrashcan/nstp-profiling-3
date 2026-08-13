<?php

namespace Database\Factories;

use App\Models\StudentEnrollment;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Student;
use App\Models\AcademicTerm;
use App\Models\StudentSection;

/**
 * @extends Factory<StudentEnrollment>
 */
class StudentEnrollmentFactory extends Factory
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
            'student_id'         => fn () => Student::inRandomOrder($seed)->first()->id,
            'student_section_id' => fn () => StudentSection::inRandomOrder($seed)->first()->id,
            'academic_term_id'   => fn () => AcademicTerm::inRandomOrder($seed)->first()->id,
            'nstp_level'         => fake()->randomElement([1, 2]),
        ];
    }
}
