<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Arr;

class Portfolio extends Component
{
    /**
     * Create a new component instance.
     */
    public array $tabs = [];

    public array $items = [];

    public function __construct()
    {
        $this->items = [
            [
                'category' => ['laravel', 'vue', 'tailwind'],
                'title' => 'laravel fullstack',
                'image' => 'https://cdn.tailgrids.com/2.0/image/marketing/images/portfolio/portfolio-01/image-01.jpg',
                'github' => 'https://github.com/bazirakye'
            ],
            [
                'category' => ['laravel', 'tailwind'],
                'title' => 'laravel fullstack',
                'image' => 'https://cdn.tailgrids.com/2.0/image/marketing/images/portfolio/portfolio-01/image-04.jpg',
                'github' => 'https://github.com/bazirakye'
            ],
            [
                'category' => ['vue', 'tailwind'],
                'title' => 'laravel fullstack',
                'image' => 'https://cdn.tailgrids.com/2.0/image/marketing/images/portfolio/portfolio-01/image-05.jpg',
                'github' => 'https://github.com/bazirakye'
            ],
            [
                'category' => ['laravel', 'vue'],
                'title' => 'laravel fullstack',
                'image' => 'https://cdn.tailgrids.com/2.0/image/marketing/images/portfolio/portfolio-01/image-06.jpg',
                'github' => 'https://github.com/bazirakye'
            ],
        ];

        $this->tabs = array_unique(Arr::flatten(Arr::pluck($this->items, 'category')));
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.portfolio');
    }
}
