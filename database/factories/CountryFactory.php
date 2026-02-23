<?php

namespace Database\Factories;

use App\Models\Continent;
use App\Models\Country;
use App\Models\Currency;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Country>
 */
class CountryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Country::class;

    public function definition(): array
    {
        return [
            'name' => fake()->country(),
            'code' => fake()->countryCode(),
            'capital' => fake()->city(),
            'population' => fake()->numberBetween(10,1500),
            'area' => fake()->randomFloat(2, 1, 17),
            'continent_id' => Continent::factory(),
            'currency_id' => Currency::factory()
        ];
    }
}
