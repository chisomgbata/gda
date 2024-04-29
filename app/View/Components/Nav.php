<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Nav extends Component
{
    /**
     * @var string[]
     */
    public array $navs = ['home', 'about', 'courses'];


    public function render()
    {
        return view('components.nav');
    }
}
