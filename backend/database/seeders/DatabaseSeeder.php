<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            GeolocationsTableSeeder::class,
            BrandsTableSeeder::class,
            BrandGeolocationTableSeeder::class,
            VisitorAnalyticsTableSeeder::class,
        ]);
    }
}
