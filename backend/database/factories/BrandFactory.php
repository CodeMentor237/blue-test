<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Brand;

class BrandFactory extends Factory
{
    protected $model = Brand::class;

    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'image' => $this->faker->imageUrl,
            'rating' => $this->faker->optional()->randomFloat(1, 1, 5),
        ];
    }
}
