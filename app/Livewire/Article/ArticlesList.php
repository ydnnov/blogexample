<?php

namespace App\Livewire\Article;

use App\Models\Article;
use Livewire\Component;

class ArticlesList extends Component
{
    public $articles;
    public $layout;

    /**
     * @param int $count
     * @param string $layout 'cards' or 'rows'
     */
    public function mount($count, $layout)
    {
        $this->layout = $layout;
        $this->articles = Article::latest()->take($count)->get();
    }

    public function render()
    {
        return view('livewire.article.articles-list-' . $this->layout);
    }
}
