<?php

namespace App\Livewire\Article;

use App\Models\Article;
use Livewire\Component;

class ArticleItem extends Component
{
    public $article;
    public $layout;

    /**
     * @param Article $article
     * @param string $layout 'cards' or 'rows'
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
}
