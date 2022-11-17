<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Message extends Component
{
    public $type,$message;
    public function __construct($type,$message)
    {
      $this->type = $type;
      $this->message = $message;
    }
    
      public function render()
      {
        return view('components.message');
        // aqui llamamos a resource/view/components/message.blade.php
      }
}
