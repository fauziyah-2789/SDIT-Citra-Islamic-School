<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MenuCard extends Component
{
    public $title;
    public $icon;
    public $color;
    public $link;

    public function __construct($title, $icon, $color, $link)
    {
        $this->title = $title;
        $this->icon  = $icon;
        $this->color = $color;
        $this->link  = $link;
    }

    public function render()
    {
        return view('components.menu-card');
    }
}
