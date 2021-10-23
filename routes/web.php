<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});


Route::resource('staff', 'App\HTTP\Controllers\StaffController');
