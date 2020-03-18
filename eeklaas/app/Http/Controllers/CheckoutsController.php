<?php

namespace App\Http\Controllers;

use App\Delivery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Address;
use App\Payment;
use Auth;
use Illuminate\Support\Facades\Session;

class CheckoutsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payments = Payment::orderBy('priority', 'asc')->get();

         return view('frontend.pages.users.address',compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'address' => ['required', 'string', 'max:100'],
            'first_name'=>'required',
            'last_name'=>'required',
            'mobile'=>'required',
            'email'=>'required',
        ]);

          $shipping = new Delivery();
        $shipping->first_name = $request->first_name;
        $shipping->last_name = $request->last_name;
        $shipping->email = $request->email;
        $shipping->mobile = $request->mobile;
        $shipping->address = $request->address;
        $shipping->zip = $request->zip;
        $shipping->shipping_to_bill = $request->shipping_to_bill;
        $shipping->save();
        $shippingId = $shipping->id;
        Session::put('id',$shippingId);
        return redirect()->route('user.order')->with('successMsg','Address Successfully Updated');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
