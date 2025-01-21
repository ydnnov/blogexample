<?php

namespace App\Services;

use App\Jobs\IncrementArticleViews;

class ArticleService
{
    public function incrementNumViews(int $articleId)
    {
        IncrementArticleViews::dispatch($articleId);
    }
}
