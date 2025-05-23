<?php

use App\Http\Controllers\x15x05Controller;
use App\Http\Controllers\X16x5xController;

use Illuminate\Support\Facades\Route;

Route::get('/task3',[x15x05Controller::class,'index']);
Route::get('/task4',[X16x5xController::class,'index']);
