<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    public function run()
    {
        // Clear existing data in the services table
        Service::truncate();

        // Seed the services table with sample data
        Service::create([
            'title' => 'Service 1',
            'description' => 'This is service 1 description.',
        ]);

        Service::create([
            'title' => 'Service 2',
            'description' => 'This is service 2 description.',
        ]);

        Service::create([
            'title' => 'Service 3',
            'description' => 'This is service 3 description.',
        ]);

        // Add more Service records as needed
    }
}
    