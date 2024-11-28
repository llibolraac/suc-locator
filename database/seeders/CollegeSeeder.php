<?php

namespace Database\Seeders;

use App\Models\College;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CollegeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        for ($i = 0; $i < 10; $i++) {
        College::create([
            'name' => Str::random(10),
            'address' => Str::random(10),
            'Longitude' => fake()->longitude(),
            'Latitude' => fake()->latitude(),
            'contact_number' => Str::random(10),
            'website' => 'http://'.Str::random(10).'.com',

        ]);
    }
        
    }
}
