<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    public $msg;
    public $type;

    public function __construct($msg, $type)
    {
        $this->msg = $msg;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.alert');
    }
}
