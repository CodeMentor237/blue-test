<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\VisitorAnalytics;

class VisitorAnalyticsFactory extends Factory
{
    protected $model = VisitorAnalytics::class;

    public function definition()
    {
        return [
            'ip_address' => $this->faker->unique()->ipv4,
            'city' => $this->faker->city,
            'country' => $this->faker->country,
            'device' => $this->faker->word,
            'visit_count' => $this->faker->numberBetween(1, 100),
            'last_visit' => $this->faker->dateTimeThisYear,
        ];
    }
}
