<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\Cart;
use App\Order;
use Auth;
use App\Product;

class CartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.pages.carts');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'product_id' => 'required'
        ],
        [
            'product_id.required' => 'Please Give A Product'
        ]
    );
        if (Auth::check()) {
            $cart = Cart::where('user_id', Auth::id())
            ->where('product_id', $request->product_id)
            ->where('order_id', NULL)
            ->first();
        }else{
            $cart = Cart::where('ip_address', request()->ip())
            ->where('product_id', $request->product_id)
            ->where('order_id', NULL)
            ->first();
        }

        if (!is_null($cart)) {
            $cart->increment('product_quantity');
        }else{
            $cart = new Cart();
            if (Auth::check()) {
                $cart->user_id = Auth::id();
            }

            $cart->ip_address = request()->ip();
            $cart->product_id = $request->product_id;
            $cart->size = $request->size;
            $cart->save();

            // dd($cart);


        }

        Toastr::success('Product Has Been Added To Cart !!',["positionClass" => "toast-top-right"]);

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
        $cart = Cart::find($id);

        $products =Product::where('id',$cart->product_id)->first();
//        dd($products);
        $buyProducts = $products->quantity;

        if( ($request->product_quantity <= $buyProducts) && ($request->product_quantity > 0)){
            $cart->product_quantity = $request->product_quantity;
            $cart->save();
            return redirect()->route('carts')->with('messages','Quantity updated successfully');
        }else{

            return redirect()->route('carts')->with('messages','Stock is not available');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cart = Cart::find($id);

        if (!is_null($cart)) {
            $cart->delete();
        }else{
            return redirect()->route('carts');
        }
        session()->flash('success', 'Cart Item Has Been Deleted Successfully !!');
        return redirect()->back();
    }
}
