<?php

namespace App\Livewire;

use Livewire\Component;
use \App\Models\House;
use Illuminate\Http\Request;
use Livewire\Attributes\Url;

class HousePreview extends Component
{
    #[Url(history: true)]
    public $id = '';
    //handle qurey make it prettier?

    public function render()
    {
        $id = $this->id;
        $house = House::findOrFail($id);

        //handle if no id exists

        return view('livewire.house-preview', ['house' => $house]);
    }
}
