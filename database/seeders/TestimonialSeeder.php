<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Testimonial;

class TestimonialSeeder extends Seeder
{
    public function run()
    {
        // Array of testimonial data
        Testimonial::truncate();

        $testimonials = [
            [
                'name' => 'John Doe',
                'designation' => 'CEO',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vestibulum finibus nisl id malesuada. Nulla facilisi. Curabitur vel arcu ut libero consequat finibus a a ex.',
            ],
            [
                'name' => 'Jane Smith',
                'designation' => 'COO',
                'description' => 'Maecenas tristique, augue et blandit efficitur, ligula eros suscipit velit, at cursus dolor tortor et nisl. Proin ullamcorper, enim a lacinia aliquet, elit mauris eleifend arcu, at condimentum orci dolor id velit.',
            ],
            [
                'name' => 'Mark Johnson',
                'designation' => 'CTO',
                'description' => 'Donec venenatis cursus sem, a dapibus tortor vestibulum sed. In nec justo libero. Vivamus semper sagittis tellus, vel consequat enim facilisis nec.',
            ],
        ];

        // Loop through testimonial data and create records in the testimonials table
        foreach ($testimonials as $testimonial) {
            Testimonial::create([
                'name' => $testimonial['name'],
                'image' => 'null',
                'designation' => $testimonial['designation'],
                'description' => $testimonial['description'],
            ]);
        }
    }
}
