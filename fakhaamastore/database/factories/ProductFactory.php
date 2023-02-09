<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

use App\Models\Category;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name" => fake()->company,
            "short_description" => fake()->realText($maxNbChars = 150, $indexSize = 2),
            "description" => fake()->realText($maxNbChars = 1000, $indexSize = 2),
            "photo" => /*"fake()->imageUrl($width = 370, $height = 450)"*/ "https://xtrfy.com/wp/wp-content/uploads/2022/10/Xtrfy-M8-Wireless-Black_Category.png",
            "gallery" => [fake()->imageUrl($width = 370, $height = 450),fake()->imageUrl($width = 370, $height = 450),fake()->imageUrl($width = 370, $height = 450)],
            "old_price" => fake()->randomNumber(2),
            "actual_price" => fake()->randomNumber(2),
            "weight" => fake()->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 9999),
            "dimentions" => [
                "width"=> fake()->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 99),
                "height"=> fake()->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 99),
                "depth"=> fake()->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 99),
            ],
            "materials" => ["metal","glass"],
            "other_infos" => fake()->realText($maxNbChars = 500, $indexSize = 2),
            "in_stock" => fake()->randomNumber(4),
            "home_slider" => fake()->boolean($chanceOfGettingTrue = 50),
            "category_id" => Category::all()->random()->id
        ];
    }
}
