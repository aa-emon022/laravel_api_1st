<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\salesman;
class salesman_info extends Model
{
    protected $table="salesman_info";
   // protected $fillable=["cust_name",'city','grade','salesman_id'];
protected $fillable=["salesman_id",'full_name','address'];
    public function Customers_info(){
        return $this->hasMany(salesman::class,'salesman_id','salesman_id');
    }
}
