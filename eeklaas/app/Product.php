<?php

namespace App;
use BinaryCats\Sku\Concerns\SkuOptions;
use BinaryCats\Sku\HasSku;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    protected $guarded = [];

	public function images()
    {
    	return $this->hasMany('App\ProductImage');
    }


	public function sub_category()
    {

      return $this->belongsTo('App\SubCategory');
    }

    public function category()
    {

      return $this->belongsTo('App\Category');
    }

    public function order()
    {
      return $this->hasMany(Order::class,'product_id');
    }

    public function seller(){
	    return $this->belongsTo('App\Seller');
    }

    public function shipping(){
        return $this->hasOne(Shipping::class);
    }



}
