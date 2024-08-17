<?php

namespace Database\Factories;

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
    public function definition(): array
    {
        return [
            'product_name' => "Example",
            'stock_product' => 100,
            'product_price' => '250.000',
            'product_image' => "Example/jpg",
            'description' => "Example",
            'size' => "Example",
            'gender' => "Example",
            'rating' => 5,
        ];
    }
}
