<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Nav extends Component
{
    /**
     * @var string[]
     */
    public array $navs = ['about','login', 'courses'];



    public function render()
    {
        return view('components.nav');
    }
}
