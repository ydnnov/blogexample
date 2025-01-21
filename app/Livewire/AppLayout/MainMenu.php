<?php

namespace App\Livewire\AppLayout;

use Livewire\Component;

class MainMenu extends Component
{
    public $items;

    public function __construct()
    {
        $this->items = [
            (object)[
                'label' => 'Главная',
                'route' => 'home',
            ],
            (object)[
                'label' => 'Каталог статей',
                'route' => 'articles.list',
                'match' => ['articles.show']
            ],
        ];
    }

    public function isActive($item)
    {
        return request()->routeIs($item->route) ||
            (isset($item->match) &&
                request()->routeIs($item->match));
    }

    public function render()
    {
        return view('livewire.app-layout.main-menu');
    }
}
