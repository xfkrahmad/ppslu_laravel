<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            News::create([
                'title' => fake()->sentence(),
                'slug' => fake()->slug(),
                'photo_url' => fake()->imageUrl(),
                'video_url' => 'https://www.youtube.com/watch?v=jGUASAxXwg4',
                'content' => fake()->paragraph(5),
            ]);
        }
    }
}
