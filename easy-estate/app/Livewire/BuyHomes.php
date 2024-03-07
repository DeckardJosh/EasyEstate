<?php

namespace App\Livewire;

use Livewire\Component;
use \App\Models\House;
use Livewire\WithPagination;

class BuyHomes extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $bedsSelectedValue = [];
    public $bathsSelectedValue = [];
    public $storiesSelectedValue = [];
    public $utilitiesSelectedValue = [];
    public function render()
    {
        $houses = House::where('for_purchase', 1)->paginate(12);
        return view('livewire.buy-homes', ['houses' => $houses]);
    }
}
