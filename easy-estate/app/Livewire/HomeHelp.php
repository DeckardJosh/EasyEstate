<?php

namespace App\Livewire;

use Livewire\Component;

class HomeHelp extends Component
{
    public $search = '';
    public function render()
    {
        return view('livewire.home-help');
    }
}
