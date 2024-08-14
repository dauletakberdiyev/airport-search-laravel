<?php

namespace Database\Factories\Airport\Support\Models;

use Airport\Support\Models\Airport;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Airport>
 */
final class AirportFactory extends Factory
{
    protected $model = Airport::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'code' => $this->faker->unique()->text(),
            'city_en' => $this->faker->city,
            'city_ru' => $this->faker->city,
            'airport_en' => $this->faker->country,
            'airport_ru' => $this->faker->country,
            'area' => $this->faker->text('10'),
            'country' => $this->faker->countryCode,
            'timezone' => $this->faker->timezone,
            'lat' => $this->faker->latitude,
            'lng' => $this->faker->longitude,
        ];
    }
}
