<?php

use App\Http\Controllers\ForOrderController;
use App\Http\Controllers\order_controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/orders',[order_controller::class,'store']);
Route::get('order_data',[ForOrderController::class,'Order_aggregate']);
