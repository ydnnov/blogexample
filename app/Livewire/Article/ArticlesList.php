<?php

namespace App\Livewire\Article;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithPagination;

class ArticlesList extends Component
{
    use WithPagination;

    public $layout;
    public $isPaginated;
    public $count;

    /**
     * Инициализация компонента
     *
     * @param int $count
     * @param string $layout 'cards' или 'rows'
     * @param bool $isPaginated
     */
    public function mount($count, $layout, $isPaginated = false)
    {
        $this->count = $count;
        $this->layout = $layout;
        $this->isPaginated = $isPaginated;
    }

    public function render()
    {
        $query = Article::latest()->with(['tags']);

        if ($this->isPaginated) {
            $articles = $query->paginate($this->count);
        } else {
            $articles = $query->take($this->count)->get();
        }

        return view('livewire.article.articles-list-' . $this->layout, [
            'articles' => $articles,
        ]);
    }
}
