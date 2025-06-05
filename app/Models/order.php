<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $table='orders';
    protected $primaryKey = 'order_id';
    public $incrementing = false; // Assuming order_id is not auto-incrementing
    protected $fillable = [
        'order_id',
        'purch_amt',
        'order_date',
        'customer_id',
        'salesman_id'
    ];
    public $timestamps = true; // Assuming you want to use created_at and updated_at timestamps
    // protected $casts = [
    //     'order_id' => 'integer',
    //     'purch_amt' => 'numeric',
    //     'order_date' => 'datetime',
    //     'customer_id' => 'integer',
    //     'salesman_id' => 'integer'
    // ];
}
