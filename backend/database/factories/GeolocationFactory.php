<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Geolocation;

class GeolocationFactory extends Factory
{
    protected $model = Geolocation::class;

    public function definition()
    {
        return [
            'country_iso2' => $this->faker->countryCode,
            'country_name' => $this->faker->country,
        ];
    }
}
