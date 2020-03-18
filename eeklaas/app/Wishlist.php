<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Wishlist extends Model
{
    public $fillable = [
    	'user_id',
    	'product_id',
    ];

    public function User()
    {
    	return $this->belongsTo(User::class);
    }
    public function order()
    {
    	return $this->belongsTo(Order::class);
    }
    public function product()
    {
    	return $this->belongsTo(Product::class);
    }




    public static function totalWishlists()
    {
        if (Auth::check()) {
            $wishlists = Wishlist::where('user_id', Auth::id())
            ->get();
        }else{
            $wishlists = Wishlist::where('ip_address', request()->ip())->where('order_id', NULL)->get();
        }
        return $wishlists;
        
    }

    public static function totalItems()
    {


        $wishlists = Wishlist::totalWishlists();

        $total_item = 0;

        foreach ($wishlists as $wishlist) {
            $total_item += $wishlist->product_quantity;
        }
        return $total_item;
        
    }


}
