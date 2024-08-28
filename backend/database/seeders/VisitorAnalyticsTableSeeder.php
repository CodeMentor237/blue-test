<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\VisitorAnalytics;
use App\Models\Geolocation;
use Faker\Factory as Faker;

class VisitorAnalyticsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $countries = Geolocation::pluck('country_name');

        foreach (range(1, 20) as $index) {
            VisitorAnalytics::create([
                'ip_address' => $faker->unique()->ipv4,
                'city' => $faker->city,
                'country' => $countries->random(),
                'device' => $faker->word,
                'visit_count' => $faker->numberBetween(1, 100),
                'last_visit' => $faker->dateTimeThisYear,
            ]);
        }
    }
}
