<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FilteredAdvertises extends Component
{
    /**
     * Create a new component instance.
     */
    public $advertisesList;
    public function __construct()
    {
        $this->advertisesList = [
            [
                'image' => 'http://placehold.co/145x145',
                'title' => 'Tênis vans Baby - 1 ano',
                'price' => 'R$ 189,99',
                'href' => '#'
            ],
            [
                'image' => 'http://placehold.co/145x145',
                'title' => 'Tênis vans Baby - 1 ano',
                'price' => 'R$ 189,99',
                'href' => '#'
            ],
            [
                'image' => 'http://placehold.co/145x145',
                'title' => 'Tênis vans Baby - 1 ano',
                'price' => 'R$ 189,99',
                'href' => '#'
            ],
            [
                'image' => 'http://placehold.co/145x145',
                'title' => 'Tênis vans Baby - 1 ano',
                'price' => 'R$ 189,99',
                'href' => '#'
            ],
            [
                'image' => 'http://placehold.co/145x145',
                'title' => 'Tênis vans Baby - 1 ano',
                'price' => 'R$ 189,99',
                'href' => '#'
            ],
            [
                'image' => 'http://placehold.co/145x145',
                'title' => 'Tênis vans Baby - 1 ano',
                'price' => 'R$ 189,99',
                'href' => '#'
            ]
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.filtered-advertises');
    }
}
