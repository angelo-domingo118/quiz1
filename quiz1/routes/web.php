<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventoryController;

Route::get('/welcome', function () {
    return view('welcome');
});


// This tells the website to listen for a link like "hello/John" and grab the "John" part

Route::get('hello/{name}', function($name) {
    return 'hi ' . $name; 

});

Route::resource('/inventory', InventoryController::class);
