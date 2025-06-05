<?php

namespace App\Http\Controllers;

use App\Models\order;
use Illuminate\Http\Request;

class ForOrderController extends Controller
{
   public function Order_aggregate(Request $request){
    //~~~~~~~~~~~~~~~~~~~0000~~~~~~~~~~~~~~~
    //$orders = Order::select('order_id', 'purch_amt')->get();

    //<<<<<<<<<<<<<<<<<<<<<1111>>>>>>>>>>>>>>>>>>>>>
    // $avg=order::avg('purch_amt');
    // return response()->json(['average_purchase_amount'=>round($avg,2)]);
    //==========2==================

    $salesman_count=order::distinct()->count('salesman_id');
    return response()->json([
        'unique_salesman_id'=>$salesman_count
    ]);


   }
}
