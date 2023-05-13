<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    public function run()
    {
        // Clear existing data in the Faq table
        Faq::truncate();

        // Seed the Faq table with sample data
        Faq::create([
            'question' => 'What is your return policy?',
            'answer' => 'Our return policy allows for returns within 30 days of purchase. Please refer to our Return Policy page for more details.',
        ]);

        Faq::create([
            'question' => 'How can I contact customer support?',
            'answer' => 'You can contact our customer support team through our contact form on the website, or by calling our toll-free number at 1-800-123-4567.',
        ]);

        Faq::create([
            'question' => 'Is my personal information secure?',
            'answer' => 'Yes, we take data privacy and security seriously. We use industry-standard encryption techniques to protect your personal information and ensure it is not shared with unauthorized parties.',
        ]);

        // Add more Faq records as needed
    }
}
