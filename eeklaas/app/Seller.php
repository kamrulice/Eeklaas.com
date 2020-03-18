<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Seller extends  Authenticatable
{
    protected $guarded = [];

    public function user(){
        return $this->hasOne('App\User','seller_id','id');
    }

    public function products(){
        return $this->hasMany('App\Product','seller_id','id');
    }
}

