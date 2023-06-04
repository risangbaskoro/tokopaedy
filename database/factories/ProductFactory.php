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
        $name = $this->faker->words(rand(2, 4), true);
        $slug = Str::of($name, '-')->slug();

        return [
            'name' => $name,
            'slug' => $slug,
            'description' => $this->faker->paragraphs(rand(1, 4), true),
            'price' => rand(10, 100) * 1000,
            'stock' => rand(1, 100),
        ];
    }
}
