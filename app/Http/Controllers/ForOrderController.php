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


    //=================2==================

    // $salesman_count=order::distinct()->count('salesman_id');
    // return response()->json([
    //     'unique_salesman_id'=>$salesman_count
    // ]);

    // /*===============📢[ 3 ]✌️=================*/

    // $total_customer=order::distinct()->count('customer_id');
    // return response()->json([
    //     'Total_Customer'=>$total_customer
    // ]);

// /*===============📢[ 3 ]✌️=================*/
    // $max_order=order::where('purch_amt',order::max('purch_amt'))->first();
    // return response()->json([
    //     "customer"=>$max_order->order_id,
    //     "MAX"=>$max_order->purch_amt
    // ]);
/*===============📢[ 5 ]✌️=================*/
$purch_amt_max=order::max('purch_amt');
$all_customer=order::where('purch_amt',$purch_amt_max)->
                orderBy('purch_amt','asc')->first();
return response()->json([
    "Order_id"=>$all_customer->order_id,
    "Amount"=>$all_customer->purch_amt
]);

   }
}
