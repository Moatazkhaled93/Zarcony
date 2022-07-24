<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Brand;
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
        $fakerFileName = fake()->image('public/storage/products',640,480, null, false);
        return [
            'brand_id' => Brand::all()->random()->id,
            'image' => "app/data/" . basename($fakerFileName),
            'title' => fake()->name(),
            'skd' => fake()->unique()->name(),
            'details' => fake()->text(),
            'price' => fake()->randomFloat(2, 1, 100 )
        
        ];
    }
}
