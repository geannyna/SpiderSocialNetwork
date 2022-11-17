<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public $title, $content, $link, $text, $place, $img;

    public function __construct($title, $content, $link = '',$text = '',$img = '')
    {
        $this->title = $title;
        $this->content = $content;
        $this->link = $link;
        $this->text = $text;
        $this->img = $img;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card');
    }
}
