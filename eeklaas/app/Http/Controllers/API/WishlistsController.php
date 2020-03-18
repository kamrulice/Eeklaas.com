<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\Cart;
use App\Order;
use App\Wishlist;
use Auth;

class WishlistsController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);

        $this->validate($request, [
            'product_id' => 'required'
        ],
        [
            'product_id.required' => 'Please Give A Product'
        ]
    );
        if (Auth::check()) {
            $wishlist = Wishlist::where('user_id', Auth::id())
            ->where('product_id', $request->product_id)
            ->where('order_id', NULL)
            ->first();
        }else{
            $wishlist = Wishlist::where('ip_address', request()->ip())
            ->where('product_id', $request->product_id)
            ->where('order_id', NULL)
            ->first();
        }

        if (!is_null($wishlist)) {
            $wishlist->increment('product_quantity');
        }else{
            $wishlist = new Wishlist();
            if (Auth::check()) {
                $wishlist->user_id = Auth::id();
            }

            // dd($wishlist);

            $wishlist->ip_address = request()->ip();
            $wishlist->product_id = $request->product_id;
            $wishlist->save();
        }

        return json_encode(['status' => 'success', 'Message' => 'Item Added To Wishlist', 'totalWishlists' => Wishlist::totalItems()]);

    }

    
}
