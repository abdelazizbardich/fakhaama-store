<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name" => fake()->word(),
            "photo" => /*fake()->imageUrl($width = 370, $height = 370)*/ "https://www.fitbit.com/global/content/dam/fitbit/global/marketing-pages/home/desktop/product-tile-fall-2021-trackers.png"
        ];
    }
}
