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
    public function definition()
    {
        return [
            'name' => $this->faker->lastName(),
            'image' => $this->faker->imageUrl(),
            'price' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 100),
            'stock' => $this->faker->numberBetween($min = 1, $max = 10),
            'description' => $this->faker->paragraph(),
        ];
    }
}
