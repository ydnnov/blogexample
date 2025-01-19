<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticlesSeeder extends Seeder
{
    public function run(): void
    {
        Article::factory(20)->create();
    }
}
