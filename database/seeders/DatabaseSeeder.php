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
            
        FontStyle::factory()
            ->sequence(
                ["name" => "Arial"],
                ["name" => 'Verdana'], 
                ["name" => 'Roboto'], 
                ["name" => 'Times New Roman'], 
                ["name" => 'Georgia'], 
                ["name" => 'EB Garamond'], 
                ["name" => 'Poppins'], 
                ["name" => 'Work Sans'], 
                ["name" => 'Quicksand'], 
                ["name" => 'Monospace'], 
                ["name" => 'Courier New'], 
                ["name" => 'Caveat'], 
                ["name" => 'Patrick Hand'], 
                ["name" => 'Dancing Script'], 
                ["name" => 'Gloria Hallelujah'], 
            )
            ->count(15)
            ->create();
            
        Hashtag::factory()
            ->count(10)
            ->create();

        UserIcon::factory()
            ->count(49)
            ->create();

        $users = User::factory()
            ->count(10)
            ->has(Content::factory()->count(5))
            ->has(Setting::factory())
            ->create();

        foreach ($users as $user) {
            // tag and send hug and heart to random contents in public
            $contentIds = Content::where("user_id", "!=", $user->id)
                ->inRandomOrder()
                ->take(fake()->numberBetween(0, 5))
                ->pluck("id")
                ->toArray();
            $user->publicTaggedContents()->attach($contentIds);
            $user->hugSentContents()->attach($contentIds);
            $user->heartSentContents()->attach($contentIds);

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
