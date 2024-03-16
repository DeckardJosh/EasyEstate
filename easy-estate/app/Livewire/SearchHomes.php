<?php

namespace App\Livewire;

use Livewire\Component;
use \App\Models\House;
use Livewire\Attributes\Url;
use Livewire\WithPagination;


class SearchHomes extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    #[Url(history: true)]
    public $search = '';

    public function search(){
        $search = $this->search;
        
        $totalHousesCount = House::where('street_city', 'like', '%' .$search . '%')->count();
        $houses = House::where('street_city', 'like', '%' .$search . '%')->paginate(12);

        //handle if no id exists
        return view('livewire.search-homes', ['houses' => $houses, 'totalHousesCount' => $totalHousesCount]);
    }

    public function render()
    {
        $search = $this->search;
        $totalHousesCount = House::where('street_city', 'like', '%' .$search . '%')->count();
        $houses = House::where('street_city', 'like', '%' .$search . '%')->paginate(12);

        //handle if no id exists

        
        return view('livewire.search-homes', ['houses' => $houses, 'totalHousesCount' => $totalHousesCount]);
    }

}
