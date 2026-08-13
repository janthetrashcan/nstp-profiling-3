<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\NstpComponent;

class NstpComponentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $components = [
            ['code' => 'CWTS', 'name' => 'Civic Welfare Training Service'],
            ['code' => 'LTS', 'name' => 'Literacy Training Service'],
            ['code' => 'ROTC', 'name' => 'Reserve Officers\' Training Corps'],
        ];

        foreach ($components as $component) {
            NstpComponent::create($component);
        }
    }
}
