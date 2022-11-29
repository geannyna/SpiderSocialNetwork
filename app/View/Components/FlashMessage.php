<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FlashMessage extends Component
{
    public $code=200;
    public $type;
    public $message;
    public $timeout;

    public function __construct($code = 0, $message = '')
    {
        $this->code = $code;
        $this->message = $message;
        if($code<=200){
            $this->type="flashMsg";
            $this->timeout=50000;
        }else if($code < 400){
            $this->type = "warning border-warning";
            $this->timeout=10000;
        }else{
            $this->type="danger border-danger bg-light";
            $this->timeout=0;
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.flash-message');
    }
}
