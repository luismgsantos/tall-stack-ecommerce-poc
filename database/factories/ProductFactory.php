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
            'name' => $this->faker->word(5),
            'slug' => $this->faker->slug(),
            'model' => $this->faker->word(),
            'description' => $this->faker->paragraph(5),
            'image' => $this->faker->imageUrl(),
            'price' => $this->faker->randomFloat(2, 1, 1000),
        ];
    }
}
