<?php

use App\Http\Controllers\x15x05Controller;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/task3',[x15x05Controller::class,'index']);
