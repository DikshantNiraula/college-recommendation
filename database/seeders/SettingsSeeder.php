<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    public function run()
    {
        // Clear existing data in the settings table
        Setting::truncate();

        // Seed the settings table with sample data
        Setting::create([
            'phone_1' => '1234567890',
            'phone_2' => '9876543210',
            'address_1' => '1234 Street, City',
            'address_2' => '5678 Avenue, Town',
            'email_1' => 'info@example.com',
            'email_2' => 'contact@example.com',
            'logo' => 'logo.png', // assuming the logo file is stored in the public folder
            'company_name' => 'Example Company',
        ]);

        // Add more Setting records as needed
    }
}
