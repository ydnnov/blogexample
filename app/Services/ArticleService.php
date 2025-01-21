<?php

namespace App\Services;

use App\Jobs\IncrementArticleLikes;
use App\Jobs\IncrementArticleViews;

class ArticleService
{
    public function incrementNumViews(int $articleId)
    {
        IncrementArticleViews::dispatch($articleId);
    }

    public function incrementNumLikes(int $articleId)
    {
        IncrementArticleLikes::dispatch($articleId);
    }
}
