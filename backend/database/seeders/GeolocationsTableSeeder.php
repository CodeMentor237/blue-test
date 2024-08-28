<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Geolocation;

class GeolocationsTableSeeder extends Seeder
{
    public function run()
    {
        $countries = json_decode(file_get_contents('https://restcountries.com/v3.1/all'), true);

        foreach ($countries as $country) {
            Geolocation::create([
                'country_iso2' => $country['cca2'],
                'country_name' => $country['name']['common'],
            ]);
        }
    }
}
