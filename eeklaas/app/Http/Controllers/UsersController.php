<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Delivery;
use App\OrderManage;
use App\OrderDetails;
use App\Paid;
use App\Product;
use App\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Payment;
use App\User;
use App\Order;
use App\Address;
use DB;

use PDF;


class UsersController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
    	$id = Auth::user()->id;
    	$product = OrderManage::where('user_id',$id)->OrderBy('id','desc')->first();
    	$orders = OrderDetails::where('order_id',$product->id)->get();
    	$shipping = Delivery::where('id',$product->shipping_id)->first();


//    	$orders = DB::table('order_manages')
//            ->join('order_details', 'order_manages.id', '=', 'order_details.order_id')
//            ->join('deliveries', 'deliveries.id', '=', 'order_manages.shipping_id')
//            ->select('order_details.*','order_manages.*','deliveries.*')
//            ->where('order_manages.user_id',$id)
//            ->get();

        return view('frontend.pages.users.dashboard',compact('user','orders','product','shipping'));
    }

    public function invoice(){
        $id = Auth::user()->id;
        $product = OrderManage::where('user_id',$id)->OrderBy('id','desc')->first();
        $orders = OrderDetails::where('order_id',$product->id)->get();
        $shipping = Delivery::where('id',$product->shipping_id)->first();
        $pdf = PDF::loadView('frontend.pages.users.orderInvoice', compact('orders','product','shipping'));
        $pdf->stream('invoice.pdf');
        return $pdf-> download('invoice.pdf');
    }

    public function account()
    {
    	$user = Auth::user();
        return view('frontend.pages.users.account',compact('user'));
    }

    public function admin_credential_rules(array $data)
    {
        $messages = [
            'current-password.required' => 'Please enter current password',
            'password.required' => 'Please enter password',
        ];

        $validator = Validator::make($data, [
            'current-password' => ['required'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ], $messages);

        return $validator;
    }

    public function generateUserInvoice($id)
    {
        $order = Order::find($id);
        return view('admin.order.invoice', compact('order'));
         $pdf = PDF::loadView('admin.order.invoice', compact('order'));
        $pdf->stream('invoice.pdf');
         return $pdf-> download('invoice.pdf');

    }

    public function updateaccount(Request $request)
    {

        if(Auth::check()){
            $request_data = $request->All();
            $validator = $this->admin_credential_rules( $request_data);
            if($validator->fails()){
                return response()->json(array('error' => $validator->getMessageBag()->toArray()), 400);
            }
            else
            {
                $current_password = Auth::User()->password;
                if(Hash::check($request_data['current-password'], $current_password))
                {
                    $user_id = Auth::User()->id;
                    $obj_user = User::find($user_id);
                    $obj_user->password = Hash::make($request_data['password']);;
                    $obj_user->first_name = $request_data['first_name'];
                    $obj_user->last_name = $request_data['last_name'];
                    $obj_user->name = $request_data['name'];
                    $obj_user->email = $request_data['email'];
                    $obj_user->phone = $request_data['phone'];
                    $obj_user->rocket = $request_data['rocket'];
                    $obj_user->bikash = $request_data['bkash'];
                    $obj_user->card_number = $request_data['card'];
                    $obj_user->ip_address = request()->ip();
                    $obj_user->save();
                    return redirect()->back()->with('successMsg','Data Updated Successfully');
                }
                else
                {
                    $error = array('current-password' => 'Please enter correct current password');
                    return response()->json(array('error' => $error), 400);
                }
            }
        }
        else
        {
             return redirect()->back();
        }

        return redirect()->back()->with('successMsg','Account Successfully Updated');
    }


    public function order_status()
    {
        $user = Auth::user();
        $Order_products = Order::where('user_id', Auth::user()->id)->get();
        return view('frontend.pages.users.order_status',compact('user','Order_products'));
    }

    public function order()
    {
        $user = Auth::user();
        $payments = Payment::orderBy('priority', 'asc')->get();
        return view('frontend.pages.users.order',compact('user','payments'));
    }
    public function updateorder()
    {
        $user = Auth::user();
        return view('frontend.pages.users.order',compact('user'));
    }
    public function address()
    {
        $user = Auth::user();
        return view('frontend.pages.users.address',compact('user'));
    }


    public function updateaddress()
    {

    }


    public function track()
    {
    	$user = Auth::user();
        return view('frontend.pages.users.track',compact('user'));
    }


    public function submitOrder(Request $request)
    {
        $this->validate($request, [
            'name'             => 'required',
            'phone_no'         => 'required',
            'shipping_address' => 'required',
            'payment_method_id'=> 'required'
        ]);
        //Check Transaction ID has given or not
        if ($request->payment_method_id != 'cash') {
            if ($request->transaction_id == NULL || empty($request->transaction_id)) {
                session()->flash('sticky_error', 'Please Give Transaction ID For Your Payment');
                return back();
            }
        }

        foreach (Cart::totalCarts() as $cart) {
            $product = Product::where('id',$cart->product_id)->first();
            $seller_id = $product->seller_id;

            $order = new Order();

            $order->name             = $request->name;
            $order->email            = $request->email;
            $order->product_id       = $cart->product_id;
            $order->seller_id       = $seller_id;
            $order->product_quantity = $cart->product_quantity;
            $order->phone_no         = $request->phone_no;
            $order->shipping_address = $request->shipping_address;
            $order->ip_address       = request()->ip();
            $order->message          = $request->message;
            $order->transaction_id   = $request->transaction_id;
            if (Auth::check()) {
                $order->user_id = Auth::id();
            }

            $order->payment_id = Payment::where('short_name', $request->payment_method_id)->first()->id;

            $order->save();
            $deleteCart = Cart::where('product_id',$cart->product_id)
                                ->where('user_id',Auth::id())
                                ->first();
            $deleteCart->delete();
        }

        return redirect()->route('user.dashboard')->with('successMsg','Order Successfully Submitted');

    }

    public function store(Request $request){
        $this->validate($request,[
            'payment'=>'required'
        ]);

        $carts = Cart::totalCarts();
        $subtotal = 0;
        $total = 0;
        foreach($carts as $cart){
            $id = $cart->product_id;
            $products = Product::where('id',$id)->first();
            $subtotal += $cart->product_quantity*$products->price;
            $total =$subtotal+60;
        }


        $payment = new Paid();
        $payment->method = $request->payment;
        $payment->save();
        $shippingId = Session::get('id');

        $order = new OrderManage();
        $order->invoice_number = uniqid();
        $order->user_id = Auth::id();
        $order->shipping_id = $shippingId;
        $order->payment_id = $payment->id;
        $order->total  = $total;
        $order->subtotal  = $subtotal;
        $order->tax  = 6;
        $order->save();
        foreach(Cart::totalCarts() as $cart){
            $product = Product::where('id',$cart->product_id)->first();
            $seller_id = $product->seller_id;
            $quantities = $product->quantity;
            $stock = $quantities-$cart->product_quantity;
            $product->quantity=$stock;
            $product->save();

            $order_details = new OrderDetails();
            $order_details->order_id = $order->id;
            $order_details->product_id = $cart->product_id;
            $order_details->seller_id = $seller_id;
            $order_details->product_name = $product->title;
            $order_details->product_price = $product->price;
            $order_details->product_quantity = $cart->product_quantity;
            $order_details->save();

            $deleteCart = Cart::where('product_id',$cart->product_id)
                ->where('user_id',Auth::id())
                ->first();
            $deleteCart->delete();
        }
        return redirect()->route('user.dashboard')->with('successMsg','Order Successfully Submitted');


    }

}
