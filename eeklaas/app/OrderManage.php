<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderManage extends Model
{
    protected $guarded = [];

    public function shipping(){
        return $this->hasOne(Delivery::class);
        
   
    }
     
}
