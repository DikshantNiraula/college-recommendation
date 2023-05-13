<?php

namespace Database\Seeders;

use App\Models\AboutUs;
use Illuminate\Database\Seeder;

class AboutUsSeeder extends Seeder
{
    public function run()
    {
        // Clear existing data in the About table
        AboutUs::truncate();

        // Seed the About table with sample data
        AboutUs::create([
            'title' => 'About Us',
            'description' => 'We are a leading company in the industry with a proven track record of success. Our mission is to provide exceptional products and services to our customers, while maintaining a high level of customer satisfaction. With our team of experienced professionals, we strive to exceed customer expectations and deliver the best possible results.',
        ]);

        // Add more About records as needed
    }
}
