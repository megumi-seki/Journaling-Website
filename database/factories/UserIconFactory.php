<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserIcon>
 */
class UserIconFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "image_path" => sprintf("https://placehold.co/32x32/%s/black?text=User+Icon", 
                fake()->safeColorName())
        ];
    }
}
