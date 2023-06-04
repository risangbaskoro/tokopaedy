<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        $name = $this->faker->name();
        $slug = Str::of($name, '-')->slug();
        return [
            'name' => $name,
            'slug' => $slug,
            'description' => $this->faker->text(),
            'price' => $this->faker->randomNumber(),
            'stock' => $this->faker->randomNumber(),
        ];
    }
}
