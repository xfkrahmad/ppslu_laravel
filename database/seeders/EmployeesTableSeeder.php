<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            Employee::create([
                'nip' => fake()->unique()->numerify('########'),
                'name' => fake()->name,
                'title_name' => fake()->title,
                'position_name' => fake()->jobTitle,
                'motto_description' => fake()->sentence,
                'photo_url' => fake()->imageUrl(),
            ]);
        }
    }
}
