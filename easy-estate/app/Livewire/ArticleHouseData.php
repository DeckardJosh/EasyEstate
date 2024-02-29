<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\House;

class ArticleHouseData extends Component
{
    public function render()
    {
        $houses = House::orderBy('id', 'desc')->take(10)->get();
        return view('livewire.article-house-data', ['houses' => $houses]);
    }
}
