<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Enums\SexEnum;
use App\Models\CollegeProgram;
use App\Models\NstpComponent;

/**
 * @extends Factory<Student>
 */
class StudentFactory extends Factory
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
            'id_number' => 'co' . fake()->numberBetween(240000, 260000),
            'serial_number' => null,
            'college_program_id' => fn () => CollegeProgram::inRandomOrder($seed)->first()->id,
            'nstp_component_id' => fn () => NstpComponent::inRandomOrder($seed)->first()->id,
            'year_graduated' => null,
            'surname' => fake()->lastName(),
            'first_name' => fake()->firstName(),
            'middle_name' => fake()->optional(0.9)->lastName(),
            'sex' => fake()->randomElement(SexEnum::cases()),
            'birthdate' => fake()->dateTimeBetween('-20 years', '-18 years'),
            'contact_no' => fake()->numerify('09#########'),
            'emergency_contact_name' => fake()->name(),
            'emergency_contact_no' => fake()->numerify('09#########'),
        ];
    }
}
