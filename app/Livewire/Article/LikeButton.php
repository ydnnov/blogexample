<?php

namespace App\Livewire\Article;

use App\Models\Article;
use Barryvdh\Debugbar\Facades\Debugbar;
use Livewire\Component;

class LikeButton extends Component
{
    public $article;

    /**
     * @param Article $article
     */
    public function mount(Article $article)
    {
        $this->article = $article;
    }

    public function render()
    {
        return view('livewire.article.like-button');
    }

    public function like()
    {
        Debugbar::info('liked article: ' . $this->article->title);
    }
}
