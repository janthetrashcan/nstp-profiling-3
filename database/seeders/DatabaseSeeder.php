<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\StudentAddress;
use Database\Seeders\NstpComponentSeeder;
use Database\Seeders\CollegeProgramSeeder;
use Database\Seeders\AcademicTermSeeder;
use App\Models\Faculty;
use Database\Seeders\StudentSectionSeeder;
use App\Models\StudentEnrollment;
use App\Models\FacultySemesterLoad;
use Database\Seeders\BarangaySeeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call(NstpComponentSeeder::class);
        $this->call(CollegeProgramSeeder::class);
        $this->call(AcademicTermSeeder::class);

        Faculty::factory(30)->create();

        $this->call(BarangaySeeder::class);
        $this->call(StudentSectionSeeder::class);

        Student::factory(50)->create()->each(function (Student $student) {
            // Generate standard random address data for 'city'
            $cityAddressData = StudentAddress::factory()
                ->type('city')
                ->make(['student_id' => $student->id])
                ->toArray();

            // Create the primary City Address record
            StudentAddress::create($cityAddressData);

            // 80% chance: Provincial address shares exact details (except type)
            // 20% chance: Provincial address generates new random values
            if (fake()->boolean(80)) {
                $provincialAddressData = array_merge($cityAddressData, [
                    'type' => 'provincial',
                ]);
            } else {
                $provincialAddressData = StudentAddress::factory()
                    ->type('provincial')
                    ->make(['student_id' => $student->id])
                    ->toArray();
            }

            StudentAddress::create($provincialAddressData);
        });

        StudentEnrollment::factory(50)->create();

        FacultySemesterLoad::factory(30)->create();
    }
}
