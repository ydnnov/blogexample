<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Services\ArticleService;

class ArticleController extends Controller
{
    protected $articleService;

    public function __construct(ArticleService $articleService)
    {
        $this->articleService = $articleService;
    }

    public function show(string $slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        return view('pages.articles-show', compact('article'));
    }

    public function incrementNumViews(int $id)
    {
        $article = Article::findOrFail($id);
        $this->articleService->incrementNumViews($article->id);
    }

    public function incrementNumLikes(int $id)
    {
        $article = Article::findOrFail($id);
        $this->articleService->incrementNumLikes($article->id);
    }
}
