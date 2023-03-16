<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PostCategory;
use App\Models\Tag;
use App\Models\Post;
use App\Models\Banner;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        PostCategory::factory(10)->create();
        Tag::factory(20)->create();
        Post::factory(30)->create();
        Banner::factory(1)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            SetupSeeder::class
        ]);


    }
}
