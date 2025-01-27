<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\ArticleComment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleCommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Article::cursor()->each(function (Article $article) {
            ArticleComment::factory()
                ->count(rand(10, 30))
                ->create([
                    'article_id' => $article->id,
                ]);
        });
    }
}
