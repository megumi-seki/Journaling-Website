<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Content>
 */
class ContentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "user_id" => User::pluck("id")->random(),
            "title" => fake()->optional(0.5)->word(),
            "content_text" => function() {
                $length = fake()->numberBetween(100, 5000);
                return fake()->text($length);
            }
        ];
    }
}
