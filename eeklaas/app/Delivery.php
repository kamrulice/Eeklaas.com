<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    protected $guarded = [];

    public function delivery(){
        return $this->belongsTo(OrderManage::class,'shipping_id');
    }
}
