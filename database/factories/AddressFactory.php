<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "country" => fake()->country(),
            "address" => fake()->address(),
            "city" => fake()->city(),
            "region" => fake()->state(),
            "postal_code" => fake()->postcode()
        ];
    }
}
