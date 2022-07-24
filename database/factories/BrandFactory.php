<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Brand>
 */
class BrandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $fakerFileName = fake()->image('public/storage/brands',640,480, null, false);
        return [
            'image' => "app/data/" . basename($fakerFileName),
            'title' => fake()->name()
        ];
    }
}
