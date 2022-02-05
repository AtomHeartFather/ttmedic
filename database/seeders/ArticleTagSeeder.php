<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\Tag;

class ArticleTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::factory()
            ->count(20)
            ->create();

        $tags = Tag::all();

        Article::all()
            ->each(function ($article) use ($tags) {
                $article->tags()
                ->attach([rand(1,20), rand(1,20)]);
            });
    }
}

        //      $article->tags()->attach(
        //         $tags->random(rand(1, 3))->pluck('id')->toArray()
        //     ); 