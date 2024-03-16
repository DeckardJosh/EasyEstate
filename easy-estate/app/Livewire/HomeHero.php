<?php

namespace App\Livewire;

use Livewire\Component;

class HomeHero extends Component
{
    public $search = '';
    public function render()
    {
        return view('livewire.home-hero');
    }
}
