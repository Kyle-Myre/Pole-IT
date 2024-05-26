<?php

namespace Database\Factories;

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
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'price' => $this->faker->numberBetween(200, 200000),
            'quantity' => $this->faker->numberBetween(10, 200),
            'description' => $this->faker->text(),
            'attachment' => $this->faker->text(),
            'dimensions' => $this->faker->text(),
            'color' => $this->faker->hexColor(),
            'discount' => $this->faker->numberBetween(),
            'category_id' => $this->faker->randomElement(Category::all()),
        ];
    }
}
