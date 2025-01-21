<?php

namespace App\Livewire\Article;

use App\Models\Article;
use Barryvdh\Debugbar\Facades\Debugbar;
use Livewire\Component;

class ArticleItem extends Component
{
    public $article;
    public $layout;

    /**
     * @param int $count
     * @param string $layout 'brief' or 'full'
     */
    public function mount(Article $article, $layout)
    {
        $this->article = $article;
        $this->layout = $layout;
    }

    public function render()
    {
        return view('livewire.article.article-item-' . $this->layout);
    }

    public function like()
    {
        Debugbar::info('liked article: '.$this->article->title);
    }
}
