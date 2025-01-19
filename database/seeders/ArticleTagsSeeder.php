<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class ArticleTagsSeeder extends Seeder
{
    public function run(): void
    {
        Tag::factory(10)->create();

        $articles = Article::all();
        $tags = Tag::all();
        $articles->each(function (Article $article) use ($tags) {
            $randomTags = $tags->random(rand(2, 5));
            $article->tags()->attach($randomTags);
        });
    }
}
