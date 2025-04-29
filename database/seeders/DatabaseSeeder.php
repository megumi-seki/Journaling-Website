<?php

namespace Database\Seeders;

use App\Models\ColorUnit;
use App\Models\Content;
use App\Models\FontSize;
use App\Models\FontStyle;
use App\Models\Hashtag;
use App\Models\Setting;
use App\Models\User;
use App\Models\UserIcon;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        ColorUnit::factory()
            ->sequence(
                ["name" => "warm colors"],
                ["name" => "cool colors"],
                ["name" => "primary colors"],
                ["name" => "secondary colors"],
                ["name" => "pastel colors"],
                ["name" => "earth tone colors"],
                ["name" => "neutral colors"],
                ["name" => "bright colors"]
            )
            ->count(8)
            ->create();

        FontSize::factory()
            ->sequence(
                ["name"=> "0.5rem"],
                ["name"=> "0.8rem"],
                ["name"=> "1rem"],
                ["name"=> "1.3rem"],
                ["name"=> "1.5rem"],
                ["name"=> "1.8rem"],
            )
            ->count(6)
            ->create();
            
        FontStyle::factory()
            ->sequence(
                ["name" => 'Arial'], 
                ["name" => 'Times New Roman'], 
                ["name" => 'Helvetica'], 
                ["name" => 'Verdana'], 
                ["name" => 'Georgia'], 
                ["name" => 'Tahoma'], 
                ["name" => 'Courier New'], 
                ["name" => 'Roboto'],
            )
            ->count(8)
            ->create();
            
        Hashtag::factory()
            ->count(10)
            ->create();

        UserIcon::factory()
            ->count(10)
            ->create();

        $users = User::factory()
            ->count(5)
            ->has(Content::factory()->count(5))
            ->has(Setting::factory())
            ->create();

        foreach ($users as $user) {
            $contentIds = Content::where("user_id", "!=", $user->id)
                ->inRandomOrder()
                ->take(fake()->numberBetween(0, 5))
                ->pluck("id")
                ->toArray();
            $user->publicTaggedContents()->attach($contentIds);

            $contents = $user->contents;
            foreach ($contents as $content) {              
                $hashtagIds = Hashtag::inRandomOrder()
                    ->take(fake()->numberBetween(0, 3))
                    ->pluck("id")
                    ->toArray();
                $content->hashtags()->attach($hashtagIds);
            }
        }

    }

}
