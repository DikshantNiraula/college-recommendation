<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    public function run()
    {
        // Clear existing data in the blogs table
        Blog::truncate();

        // Seed the blogs table with sample data
        Blog::create([
            'title' => 'Blog 1',
            'description' => 'This is blog 1 description.',
        ]);

        Blog::create([
            'title' => 'Blog 2',
            'description' => 'This is blog 2 description.',
        ]);

        Blog::create([
            'title' => 'Blog 3',
            'description' => 'This is blog 3 description.',
        ]);

        // Add more Blog records as needed
    }
}
