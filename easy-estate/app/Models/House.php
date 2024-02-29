<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;

    //for mass assignment/seeding
    //fillable includes all table fields we want to be able to add for a record in the table
    protected $fillable = [
        'street_address',
        'street_city',
        'for_purchase',
        'price',
        'bed',
        'bath',
        'sqft',
        'stories',
        'dishwasher',
        'disposal',
        'washer',
        'dryer',
        'fridge',
        'heat_cooling',
        'fireplace',
        'garage',
        'year_built',
        'year_renovated'
    ];
}
