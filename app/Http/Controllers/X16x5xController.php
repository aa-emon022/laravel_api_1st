<?php

namespace App\Http\Controllers;

use App\Models\taskx16x5;
use Illuminate\Http\Request;

class X16x5xController extends Controller
{
    public function index(){
        $users=taskx16x5::all();
     return response()->json($users);
    }
}
