<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\BrandGeolocation;

class BrandGeolocationFactory extends Factory
{
    protected $model = BrandGeolocation::class;

    public function definition()
    {
        return [
            'brand_id' => \App\Models\Brand::factory(),
            'geolocation_id' => \App\Models\Geolocation::factory(),
            'position' => $this->faker->numberBetween(1, 10),
        ];
    }
}
