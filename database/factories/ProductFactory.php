<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
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
            'name' => fake()->words(4, true),
            'description' => fake()->sentences(3, true),
            'brand'  => fake()->randomElement(['Apple', 'Samsung', 'Xiaomi', 'Huawei']),
            'sku'  => fake()->numerify('COMP-######'),
            'price' => fake()->randomFloat(2, 100, 3000),
            'featured' => fake()->boolean(),
            'stock' => fake()->randomDigit(),
            'created_at' => fake()->dateTimeBetween('1 week ago', 'now'),
            'updated_at' => now(),
        ];
    }
}
