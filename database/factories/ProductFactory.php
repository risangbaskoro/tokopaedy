<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'slug' => $this->faker->slug(),
            'description' => $this->faker->text(),
            'price' => $this->faker->randomNumber(),
            'stock' => $this->faker->randomNumber(),
        ];
    }
}
