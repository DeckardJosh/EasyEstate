<?php

use App\Http\Controllers\HouseController;
use Illuminate\Support\Facades\Route;
use App\Models\House;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/buy', function() {
    return view('buy');
});

Route::get('/rent', function(){
    return view('rent');
});

Route::resource('houses', HouseController::class);