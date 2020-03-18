<?php

namespace App\Http\Controllers\Admin;

use App\OrderManage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
use App\OrderDetails;
use App\Delivery;
use App\paid;
use PDF;


class OrdersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$orders = OrderManage::orderBy('id', 'desc')->get();
    	return view('admin.order.index', compact('orders'));
    }
    public function show($id)
    {
        $orderView = OrderManage::find($id);
        $orders = OrderDetails::where('order_id',$orderView->id)->get();
        $payment = paid::where('id',$orderView->id)->first();
        if($orderView->status==0){
        $orderView->status = 1;
        $orderView->save();
        }
        
        $shipping = Delivery::where('id',$orderView->shipping_id)->first();
    
    	return view('admin.order.show', compact('shipping','orders','orderView','payment'));
    }

    public function update(Request $request){
        $find = OrderDetails::where('id',$request->id)->first();
        $order = OrderManage::where('id',$find->order_id)->first();
        $subtotal=0;
        $total = 0;
        $subtotal = $request->product_quantity*$find->product_price;
        $total =$subtotal+60;
        $order->subtotal = $subtotal;
        $order->total = $total;
        $order->save();
        $find->product_quantity = $request->product_quantity;
        $find->save();
        return redirect()->back();
    }

    public function completed($id)
    {
        $order = OrderManage::find($id);
        if ($order->is_complete) {
            $order->is_complete = 0;
        }else{
            $order->is_complete = 1;
        }
        $order->save();

        return redirect()->back()->with('successMsg','Order Completed Status Changed ..!');

    }
    public function chargeUpdate(Request $request, $id)
    {
        $order = Order::find($id);

        $order->shipping_charge = $request->shipping_charge;
        $order->custom_discount = $request->custom_discount;

        $order->save();

        return redirect()->back()->with('successMsg','Order Charge And Discount Has Changed ..!');
    }
    public function generateInvoice($id)
    {
        $orderView = OrderManage::find($id);
        $orders = OrderDetails::where('order_id',$orderView->id)->get();
        $shipping = Delivery::where('id',$orderView->shipping_id)->first();
    	$pdf = PDF::loadView('admin.order.invoice', compact('orders','orderView','shipping'));
        $pdf->stream('invoice.pdf');
        return $pdf-> download('invoice.pdf');


    }
    public function paid($id)
    {
        $order = Order::find($id);
        if ($order->is_paid) {
            $order->is_paid = 0;
        }else{
            $order->is_paid = 1;
        }
        $order->save();

        return redirect()->back()->with('successMsg','Order Paid Status Changed ..!');
    }
    public function delete($id)
    {
        $product = OrderManage::find($id);
        if (!is_null($product)) {
            $product->delete();
        }

        return redirect()->back()->with('successMsg','Order has been deleted successfully !!');

    }

}
