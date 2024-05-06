<?php

namespace App\Livewire;

use Livewire\Component;

class Posts extends Component
{

    public $hello = "maria";
    
    public function render()
    {
        return view('livewire.posts');
    }
}
