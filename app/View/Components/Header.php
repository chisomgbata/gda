<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Header extends Component
{

    public array $navs = ['about','login', 'courses'];

    public function render()
    {
        return view('components.header');
    }
}
