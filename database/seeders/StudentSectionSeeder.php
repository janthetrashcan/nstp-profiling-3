<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AcademicTerm;
use App\Models\Faculty;
use App\Models\NstpComponent;
use App\Models\Barangay;
use App\Models\StudentSection;

class StudentSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seed = 4;
        $capacity = 40;

        $sections = array_map(function ($letter) use ($capacity, $seed) {
            return [
                'academic_term_id' => AcademicTerm::value('id'),
                'faculty_id' => Faculty::inRandomOrder($seed)->value('id'),
                'nstp_component_id' => NstpComponent::inRandomOrder($seed)->value('id'),
                'barangay_id' => Barangay::inRandomOrder($seed)->value('id'),
                'name' => $letter,
                'capacity' => $capacity,
            ];
        }, range('A', 'Z'));

        foreach ($sections as $section) {
            StudentSection::create($section);
        }
    }
}
