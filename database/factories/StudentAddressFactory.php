<?php

namespace Database\Factories;

use App\Models\Student;
use App\Models\Barangay;
use App\Enums\AddressTypeEnum;
use App\Models\StudentAddress;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<StudentAddress>
 */
class StudentAddressFactory extends Factory
{
    protected $model = StudentAddress::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        $seed = 4;

        return [
            'student_id' => Student::factory(),
            'type'       => fake()->randomElement(AddressTypeEnum::cases()),
            'house_no'   => fake()->optional(0.5)->buildingNumber(),
            'street'     => fake()->streetName(),
            'barangay'   => fn () => Barangay::inRandomOrder($seed)->first()->name,
            'city'       => fake()->city(),
            'province'   => fake()->city(),
        ];
    }

    /**
     * State method to set explicit type.
     */
    public function type(string $type): static
    {
        return $this->state(fn (array $attributes) => [
            'type' => $type,
        ]);
    }
}
