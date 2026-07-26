<?php

use App\Http\Controllers\ChirpController;
use Illuminate\Support\Facades\Route;

/* 
It will be the one at the bottom
Route::get('/', function () {
    return view('home');
}); 
*/

Route::get('/', [ChirpController::class, 'index']);
