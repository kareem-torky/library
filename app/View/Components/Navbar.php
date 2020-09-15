<?php

namespace App\View\Components;

use App\Category;
use Illuminate\View\Component;

class Navbar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        $cats = Category::get();

        return view(
            'components.navbar', 
            compact('cats')
        );
    }
}
