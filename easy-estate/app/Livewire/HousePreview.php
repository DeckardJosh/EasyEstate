<?php

namespace App\Livewire;

use Livewire\Component;
use \App\Models\House;

class HousePreview extends Component
{
    // public $house;

    // public function mount($id)
    // {
    //     // Fetch the house details using the provided ID
    //     $this->house = House::find($id);
    // }
    public function render()
    {
        return view('livewire.house-preview');
    }
}
