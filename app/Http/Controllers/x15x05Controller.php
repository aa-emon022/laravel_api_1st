<?php

namespace App\Http\Controllers;

use App\Models\task3;
use Illuminate\Http\Request;

class x15x05Controller extends Controller
{
    public function index(){
        $tasks=task3::all();
        return response()->json($tasks);
    }
}
