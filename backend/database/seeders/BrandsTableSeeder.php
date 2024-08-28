<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandsTableSeeder extends Seeder
{
    public function run()
    {
        // Example brands for seeding
        $brandNames = [
            'Casino Royale',
            'Lucky Spin',
            'Jackpot City',
            'Royal Vegas',
            'Spin Palace',
            'Golden Nugget',
            'Betway',
            '888 Casino',
            'Caesars Palace',
            'MGM Grand',
        ];

        foreach ($brandNames as $index => $brandName) {
            Brand::create([
                'name' => $brandName,
                'image' => 'https://via.placeholder.com/150',
                'rating' => rand(1, 5), // Random rating between 1 and 5
            ]);
        }
    }
}
