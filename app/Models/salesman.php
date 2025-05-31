<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class salesman extends Model
{
    protected $table='salesmen';
    protected $fillable=["cust_name",'city','grade','salesman_id'];
    public function salesman (){
        return $this->belongsTo(salesman_info::class,'salesman_id');
    }
}
