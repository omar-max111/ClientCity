<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CityController;

// Route to list clients
Route::get('/', function () {
    return redirect('/clients');
});

Route::resource('clients', ClientController::class);
Route::resource('cities', CityController::class);

