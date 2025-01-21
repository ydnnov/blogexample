<?php

namespace App\Jobs;

use App\Models\Article;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class IncrementArticleViews implements ShouldQueue
{
    use Queueable;

    protected $articleId;

    public function __construct(int $articleId)
    {
        $this->articleId = $articleId;
    }

    public function handle()
    {
        Article::findOrFail($this->articleId)->increment('num_views');
    }
}
