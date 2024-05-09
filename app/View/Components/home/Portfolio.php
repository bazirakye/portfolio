<?php

namespace App\View\Components\home;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Arr;

class Portfolio extends Component
{
    public array $categorytabs = [];
    public array $items = [];

    public string $text;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->text = "helloworld";

        $this->items = [
            [
                "category" => "['laravel', 'Tailwind', 'Vue']",
                "title" => "['laravel app', 'Tailwind css']",
                "image" => "https://cdn.tailgrids.com/2. 0/image/assets/images/brands/ayroui.svg",
                "github" => "https://github.com/bazirakye",
            ],
            [
                "category" => "['laravel', 'Tailwind', 'Vue']",
                "title" => "['laravel app', 'Tailwind css']",
                "image" => "https://cdn.tailgrids.com/2. 0/image/assets/images/brands/ayroui.svg",
                "github" => "https://github.com/bazirakye",
            ],
            [
                "category" => "[ 'Tailwind', 'Vue']",
                "title" => "['laravel app', 'Tailwind css']",
                "image" => "https://cdn.tailgrids.com/2. 0/image/assets/images/brands/ayroui.svg",
                "github" => "https://github.com/bazirakye",
            ],
            [
                "category" => "['laravel', 'Tailwind', 'Vue']",
                "title" => "['laravel app', 'Tailwind css']",
                "image" => "https://cdn.tailgrids.com/2. 0/image/assets/images/brands/ayroui.svg",
                "github" => "https://github.com/bazirakye",
            ],
            [
                "category" => "['laravel', 'Tailwind']",
                "title" => "['laravel app', 'Tailwind css']",
                "image" => "https://cdn.tailgrids.com/2. 0/image/assets/images/brands/ayroui.svg",
                "github" => "https://github.com/bazirakye",
            ],
            [
                "category" => "['laravel', 'Vue']",
                "title" => "['laravel app', 'Tailwind css']",
                "image" => "https://cdn.tailgrids.com/2. 0/image/assets/images/brands/ayroui.svg",
                "github" => "https://github.com/bazirakye",
            ]


        ];

        $this->categorytabs = Arr::flatten(Arr::pluck($this->items, "category"));
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home.portfolio');
    }
}
