<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
     public $fillable = [
    	'user_id',
        'ip_address',
    	'payment_id',
    	'name',
    	'phone_no',
    	'shipping_address',
    	'email',
    	'message',
    	'is_paid',
    	'is_completed',
        'is_seen_by_admin',
    	'transaction_id'
    ];

    public function User()
    {
    	return $this->belongsTo(User::class);
    }
    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function Address()
    {
        return $this->belongsTo(Address::class);
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }

    public function product()
    {
      
      return $this->belongsTo(Product::class);
    }

}
