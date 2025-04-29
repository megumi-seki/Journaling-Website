<?php

namespace Database\Factories;

use App\Models\ColorUnit;
use App\Models\FontSize;
use App\Models\FontStyle;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Setting>
 */
class SettingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // "user_id" => User::pluck("id")->random(),
            "public_mode" => fake()->boolean(),
            "screen_mode" => fake()->boolean(),
            "color_units_id" => ColorUnit::pluck("id")->random(),
            "font_size_id" => FontSize::pluck("id")->random(),
            "font_style_id" => FontStyle::pluck("id")->random(),
        ];
    }
}
