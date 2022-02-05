<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ArticleSeeder::class,
            ArticleTagSeeder::class,
        ]);

        // DB::table('article_tag')->insert([
        //     'article' => Str::random(10),
        //     'email' => Str::random(10).'@gmail.com',
        //     'password' => Hash::make('password'),
        // ]);

        // // \App\Models\User::factory(10)->create();

        // factory(App\Tag::class, 10)->create();

        // factory(App\Article::class, 20)->create();

        // // Get all the roles attaching up to 3 random roles to each user
        // $tags = App\Tag::all();

        // // Populate the pivot table
        // App\Article::all()->each(function ($article) use ($tags) { 
        //     $article->tags()->attach(
        //         $tags->random(rand(1, 3))->pluck('id')->toArray()
        //     ); 
        // });
    }
}
