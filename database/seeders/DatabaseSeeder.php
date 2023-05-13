<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Database\Seeders\SettingsSeeder;
use Database\Seeders\ServicesSeeder;
use Database\Seeders\BlogSeeder;
use Database\Seeders\AboutUsSeeder;
use Database\Seeders\FaqSeeder;
use Database\Seeders\TestimonialSeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Call the SettingsSeeder class to run the seeder
        $this->call(SettingsSeeder::class);

        // Call the ServicesSeeder class to run the seeder
        $this->call(ServicesSeeder::class);

        // Call the BlogSeeder class to run the seeder
        $this->call(BlogSeeder::class);

        // Call the AboutUsSeeder class to run the seeder
        $this->call(AboutUsSeeder::class);

        // Call the FaqSeeder class to run the seeder
        $this->call(FaqSeeder::class);

        // Call the TestimonialSeeder class to run the seeder
        $this->call(TestimonialSeeder::class);
        $this->call(InfoCounterSeeder::class);

        // Add more seeders as needed
    }
}
