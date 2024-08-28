<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BrandGeolocation;
use App\Models\Brand;
use App\Models\Geolocation;

class BrandGeolocationTableSeeder extends Seeder
{
    public function run()
    {
        $brands = Brand::all();
        $geolocations = Geolocation::all();

        // Check if there are geolocations and brands
        if ($brands->count() === 0 || $geolocations->count() === 0) {
            $this->command->info('Brands or Geolocations are missing. Please run BrandsTableSeeder and GeolocationsTableSeeder first.');
            return;
        }

        foreach ($brands as $brand) {
            // Select a random number of geolocations to associate with each brand
            $randomGeolocations = $geolocations->random(rand(1, 10));

            foreach ($randomGeolocations as $index => $geolocation) {
                BrandGeolocation::create([
                    'brand_id' => $brand->id,
                    'geolocation_id' => $geolocation->id,
                    'position' => $index + 1,
                ]);
            }
        }
    }
}
