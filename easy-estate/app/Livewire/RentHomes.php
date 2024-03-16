<?php

namespace App\Livewire;

use Livewire\Component;
use \App\Models\House;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Route;

class RentHomes extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search = '';
    public $search_value = '';
    public $bedsSelectedValue = 'any';
    public $bathsSelectedValue = 'any';
    public $storiesSelectedValue = 'any';
    public $utilitiesSelectedValue = [];

    public function filterClear(){
        $this->bedsSelectedValue = 'any';
        $this->bathsSelectedValue = 'any';
        $this->storiesSelectedValue = 'any';
        $this->utilitiesSelectedValue = [];
        $this->search = '';
    }

    public function render(){
        $query = House::where('for_purchase', 0);

        if($this->search !== ''){
            $query->where('street_city', 'like', '%' .$this->search . '%');
        }

        if ($this->bedsSelectedValue !== 'any') {
            $query->where('bed', $this->bedsSelectedValue);
        }
    
        if ($this->bathsSelectedValue !== 'any') {
            $query->where('bath', $this->bathsSelectedValue);
        }
    
        if ($this->storiesSelectedValue !== 'any') {
            $query->where('stories', $this->storiesSelectedValue);
        }
    
        if (!empty($this->utilitiesSelectedValue)) {
            foreach ($this->utilitiesSelectedValue as $utility) {
                // Assuming the utility corresponds to a column name in the database
                if($utility == "dishwasher"){
                    $query->where('dishwasher', 1);
                }
                if($utility == "disposal"){
                    $query->where('disposal', 1);
                }
                if($utility == "washer"){
                    $query->where('washer', 1);
                }
                if($utility == "dryer"){
                    $query->where('dryer', 1);
                }
                if($utility == "fridge"){
                    $query->where('fridge', 1);
                }
                if($utility == "heat_cooling"){
                    $query->where('heat_cooling', 1);
                }
                if($utility == "garage"){
                    $query->where('garage', 1);
                }
            }
        }

        $totalHousesCount = $query->count();
    
        $houses = $query->paginate(12);
    
        return view('livewire.rent-homes', ['houses' => $houses, 'totalHousesCount' => $totalHousesCount]);
    }
}
