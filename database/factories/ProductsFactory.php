<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $image = basename($this->faker->image(storage_path('app/public/products'), 640, 480, null, false));

        return [
            'name' => $this->faker->word,
            'sell_price' => $this->faker->randomFloat(2, 0, 100),
            'buy_price' => $this->faker->randomFloat(2, 0, 100),
            'image' => $image,
            'stock' => $this->faker->numberBetween(0, 100),
        ];
    }
}
