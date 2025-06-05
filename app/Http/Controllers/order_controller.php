<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;
use Illuminate\Support\Facades\Validator;
class order_controller extends Controller
{
    public function store(Request $request){
        // $validatedData=$request->validate([
        //     'order_id'=>'required | integer | unique:orders,order_id',
        //     'purch_amt'=>'required | numeric',
        //     'order_date'=>'required | date',
        //     'customer_id'=>'required | integer',
        //     'salesman_id'=>'required | integer'

        // ]);
        // $order=order::create($validatedData);
        $order=[];
        $orders=$request->all();
        foreach($orders as $order_data){
            $order_validation=Validator::make($order_data,[
            'order_id'=>'required | integer | unique:orders,order_id',
            'purch_amt'=>'required | numeric',
            'order_date'=>'required | date',
            'customer_id'=>'required | integer',
            'salesman_id'=>'required | integer'
            ]);
            $order[]=order::create($order_validation->validated());
        }
        return response()->json(['success'=>true,'order'=>$order]);
    }
}
