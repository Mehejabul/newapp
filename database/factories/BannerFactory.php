<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Banner>
 */
class BannerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'banner_title' => 'Manage your business strategy with SEO digital agency',
            'banner_image' => fake()->imageUrl($width = 640, $height = 480, 'Banner'),
            'banner_mid_title' => 'Our passion to work hard and deliver excellent results. It could solve the needs of your customers and develop innovation.',
            'banner_Sub_title' => 'Our passion to work hard and deliver excellent results. It could solve the needs of your customers and develop innovation.',
            'banner_button' => 'Get Started',
            'banner_publish' => 1,
            'banner_slug' => uniqid(),
        ];
    }
}
