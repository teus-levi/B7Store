<?php

namespace App\View\Components\Base;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Header extends Component
{
    /**
     * Create a new component instance.
     */

    public function __construct()
    {
        //

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $data['user'] = "Teste";
        return view('components.base.header', $data);
        //return view('components.base.header')->with('images', "Teste");
    }
}
