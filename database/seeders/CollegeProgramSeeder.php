<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CollegeProgram;

class CollegeProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $programs = [
            ['code' => 'BSBME', 'title' => 'Bachelor of Science in Biomedical Engineering'],
            ['code' => 'BSCS', 'title' => 'Bachelor of Science in Computer Science'],
            ['code' => 'BSCE', 'title' => 'Bachelor of Science in Civil Engineering'],
            ['code' => 'BSCpE', 'title' => 'Bachelor of Science in Computer Engineering'],
            ['code' => 'BSIT', 'title' => 'Bachelor of Science in Information Technology'],
            ['code' => 'BS NMCA', 'title' => 'Bachelor of Science in New Media and Computer Animation'],
            ['code' => 'BS Bio', 'title' => 'Bachelor of Science in Biology'],
            ['code' => 'BS Math', 'title' => 'Bachelor of Science in Mathematics'],
            ['code' => 'BSEd', 'title' => 'Bachelor of Secondary Education Major in x-x-x-x'],
            ['code' => 'BEEd', 'title' => 'Bachelor of Elementary Education'],
            ['code' => 'BPEd', 'title' => 'Bachelor of Physical Education'],
            ['code' => 'BECEd', 'title' => 'Bachelor of Early Childhood Education'],
            ['code' => 'BSN', 'title' => 'Bachelor of Science in Nursing'],
            ['code' => 'BA Econ', 'title' => 'Bachelor of Arts in Economics'],
            ['code' => 'BA ELS', 'title' => 'Bachelor of Arts in English Language Studies'],
            ['code' => 'BA InDis', 'title' => 'Bachelor of Arts in Interdisciplinary Studies'],
            ['code' => 'BA Philo', 'title' => 'Bachelor of Arts in Philosophy'],
            ['code' => 'BA Ints', 'title' => 'Bachelor of Arts in International Studies'],
            ['code' => 'BA Comm', 'title' => 'Bachelor of Arts in Communication'],
            ['code' => 'BS Psych', 'title' => 'Bachelor of Science in Psychology'],
            ['code' => 'BSAc', 'title' => 'Bachelor of Science in Accountancy'],
            ['code' => 'BSMA', 'title' => 'Bachelor of Science in Management Accounting'],
            ['code' => 'BSBA', 'title' => 'Bachelor of Science in Business Administration'],
            ['code' => 'BSLM', 'title' => 'Bachelor of Science in Legal Management'],
            ['code' => 'BSOA', 'title' => 'Bachelor of Science in Office Administration'],
            ['code' => 'BSAIS', 'title' => 'Bachelor of Science in Accounting Information System'],
            ['code' => 'BSIA', 'title' => 'Bachelor of Science in Internal Auditing'],
            ['code' => 'AEET', 'title' => 'Associate in Electronics Engineering Technology'],
        ];

        foreach ($programs as $program) {
            CollegeProgram::create($program);
        }
    }
}
