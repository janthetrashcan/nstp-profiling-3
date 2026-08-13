<?php

namespace Database\Factories;

use App\Models\Faculty;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Enums\SexEnum;
use App\Enums\EmploymentStatusEnum;

/**
 * @extends Factory<Faculty>
 */
class FacultyFactory extends Factory
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
            'user_id' => fn () => User::inRandomOrder($seed)->first()->id,
            'employee_id' => fake()->numerify('20####'),
            'surname' => fake()->lastName(),
            'first_name' => fake()->firstName(),
            'middle_name' => fake()->optional(0.9)->lastName(),
            'sex' => fake()->randomElement(SexEnum::cases()),
            'birthdate' => fake()->dateTimeBetween('-50 years', '-24 years'),
            'employment_status' => fake()->randomElement(EmploymentStatusEnum::cases()),
        ];
    }
}
