<?php

namespace App\Http\Controllers;

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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.pages.wishlist');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);

        $this->validate($request, [
            'product_id' => 'required',
            'user_id' => 'required',
        ],
        [
            'product_id.required' => 'Please Give A Product',
            'user_id.required' => 'Please Login first'
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
            
            $wishlist->user_id = $request->user_id;
            $wishlist->ip_address = request()->ip();
            $wishlist->product_id = $request->product_id;
            $wishlist->save();
        }

        Toastr::success('Product Has Been Added To Wishlist !!',["positionClass" => "toast-top-right"]);

        // dd($cart);

        return redirect()->back();

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $wishlist = Wishlist::find($id);
        if(!is_null($wishlist)){
            $wishlist->product_quantity = $request->product_quantity;
            $wishlist->save();
        }else{
            return redirect()->route('wishlists');
        }
        return redirect()->back()->with('successMsg','Wishlist Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wishlist = Wishlist::find($id);

        if (!is_null($wishlist)) {
            $wishlist->delete();
        }else{
            return redirect()->route('wishlists');
        }
        return redirect()->back()->with('successMsg','Wishlist Successfully Deleted');
    }
}
