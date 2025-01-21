<?php

namespace App\Livewire\Article;

use App\Models\Article;
use Livewire\Component;

class LikesControl extends Component
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
        return view('livewire.article.likes-control', ['article' => $this->article]);
    }
}
