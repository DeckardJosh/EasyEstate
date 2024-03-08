<?php

namespace App\Livewire;

use Livewire\Component;
use \App\Models\House;

class HousePreview extends Component
{
//     public function mount($uuid)
// {
//     $customer = Customer::where('uuid', $uuid)->first();
//         $this->name  = $customer->name;
//         $this->age   = $customer->age;
//         $this->dob   = $customer->dob;
// }
    public function render($id)
    {
        // $houses = House::find($id)->get();
        // , ['houses' => $houses]
        return view('livewire.house-preview');
    }
}
