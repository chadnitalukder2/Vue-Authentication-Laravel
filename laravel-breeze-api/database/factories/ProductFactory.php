<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'product_name' => $this->faker->word,
            'product_price' => $this->faker->randomFloat(100, 2000),
            'product_quantity' => $this->faker->numberBetween(1, 100),
            'brand_id' =>$this->faker->numberBetween(1, 20),
            'category_id' => Category::factory(), 
            'product_img' => $this->faker->imageUrl(400, 300, 'food'),
            'product_details' => $this->faker->paragraph,
        ];
    }
}
