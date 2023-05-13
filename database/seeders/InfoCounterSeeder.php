<?php

namespace Database\Seeders;

use App\Models\InfoCounter;
use Illuminate\Database\Seeder;

class InfoCounterSeeder extends Seeder
{
    public function run()
    {
        // Seed your InfoCounter model with data
        InfoCounter::create([
            'count1' => 100,
            'count2' => 200,
            'count3' => 300,
            'count4' => 400,
        ]);
    }
}
