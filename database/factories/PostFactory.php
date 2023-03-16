<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\PostCategory;
use App\Models\Tag;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'postcate_id' => PostCategory::all()->random()->postcate_id,
            'tag_id' => Tag::all()->random()->tag_id,
            'post_title' => $url = fake()->sentence($nbWords = 7, $variableNbWords = true),
            'post_subtitle' => fake()->sentence($nbWords = 4, $variableNbWords = true),
            'post_details' => fake()->sentence($nbWords = 20, $variableNbWords = true),
            'post_feature' => 1,
            'post_feature_image' => fake()->imageUrl($width = 640, $height = 480, 'Post'),
            'post_url' => Str::slug($url, '-'),
            'post_slug' => uniqid(),
        ];
    }
}
