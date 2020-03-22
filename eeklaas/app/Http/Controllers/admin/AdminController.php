<?php

namespace App\Http\Controllers\admin;

use App\Cart;
use App\Order;
use App\Product;
use App\ProductImage;
use App\Seller;
use App\Shipping;
use App\User;
use App\OrderDetails;
use Illuminate\Support\Facades\Session;
use PDF;
use Charts;
use Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function admin(){

        $admins = User::where('role_id',1)->paginate(10);
//        dd($admin);
        return view('admin.Admin.index',compact('admins'));
    }

    public function productImage(){

        return view('admin.product.imageContain');
    }

    public function productImageUpload(Request $request){

        $product = Product::orderBy('id','desc')->first();

        $Checkimage = $request->file('file');
        if(!empty($Checkimage)){
            $img = time() .$Checkimage->getClientOriginalExtension();
            $location = 'uploads/products/' . $img;
            Image::make($Checkimage)->save($location);

            $product_image = new ProductImage;
            $product_image->product_id = $product->id;
            $product_image->image = $img;
            $product_image->save();
        }
    }

    public function adminCreate(){
        return view('admin.Admin.create');
    }

    public function adminStore(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'password'=>'required|min:8',
        ]);

        $admin = new User();
        $admin->name = $request->name;
        $admin->role_id = $request->role_id;
        $admin->email = $request->email;
        $admin->phone = $request->phone;
        $admin->password = Hash::make($request->password);
        $admin->isAdmin = $request->isAdmin;
        $admin->save();
        return redirect()->back()->with('successMsg','Admin added successfully');
    }

    public function active($id){
        $active = User::find($id);

        if($active->status==1){
            $active->status = 0;
            $active->save();
        }else{
            $active->status=1;
            $active->save();
        }

        return redirect()->back();
    }

    public function adminEdit($id){
        $adminEdit = User::find($id);
        return view('admin.Admin.create',compact('adminEdit'));
    }

    public function adminUpdate(Request $request){
        $updateAdmin = User::where('id',$request->id)->first();
        $updateAdmin->name = $request->name;
        $updateAdmin->email = $request->email;
        $updateAdmin->phone = $request->phone;
        $updateAdmin->password = Hash::make($request->password);
        $updateAdmin->isAdmin = $request->isAdmin;
        $updateAdmin->save();
        return redirect()->route('admin.users')->with('successMsg','Admin Updated successfully');
    }

    public function adminDelete($id){
        $adminDelete = User::find($id);
        $adminDelete->delete();
        return redirect()->back()->with('successMsg','Admin added successfully');
    }

    public function allSeller(){
        $admins = Seller::all();
        return view('admin.Seller.index',compact('admins'));
    }

    public function sellerActive($id){
        $active = Seller::find($id);

        if($active->status==1){
            $active->status = 0;
            $active->save();
        }else{
            $active->status=1;
            $active->save();
        }

        return redirect()->back();
    }

    public function sellerDelete($id){
        $sellerDelete = Seller::find($id);
        $sellerDelete->delete();
        return redirect()->back()->with('successMsg','Admin added successfully');
    }

    public function inventory(){
       
        $deliveries = OrderDetails::orderBy('id', 'desc')->get();
        return view('admin.Inventory.index',compact('deliveries'));
    }
    public function stockIn(){
        $stocks = Product::where('quantity','>',5)->latest()->orderBy('created_at','DESC')->get();
         return view('admin.Inventory.createStock',compact('stocks'));
    }
    public function stockOut(){
        $stockOuts = Product::where('quantity','<=',4)->orderBy('created_at','DESC')->get();
        return view('admin.Inventory.stockOut',compact('stockOuts'));
    }
    public function shipping($id){
        $delivery = Order::find($id);
        return view('admin.Inventory.shippingCreate',compact('delivery'));
    }

    public function addQuantity(Request $request){
        $quantity = Product::where('id',$request->id)->first();
        $quantities = $quantity->quantity;
        $stock = $quantities+ $request->quantity;
        $quantity->quantity = $stock;
        $quantity->save();
        return redirect()->route('product.index')->with('successMsg','Quantity Successfully Saved');

    }
    public function addDiscount(Request $request){
        $product = Product::where('id',$request->id)->first();
        $offer_price = ($product->price*$request->offer_price)/100;
        $updatePrice = $product->price-$offer_price;
        $product->status = $request->status;
        $product->new_price = $updatePrice;
        $product->offer_price = $request->offer_price;
        $product->save();
        return redirect()->route('product.index')->with('successMsg','Discount Successfully Saved');

    }

    public function complete($id){
        $complete = Shipping::find($id);
        $complete->status=1;
        $complete->save();
        return redirect()->route('inventory.index') ;
    }
    public function stockInvoice(){
        $stocks= Product::where('quantity','>',0)->get();
        $pdf = PDF::loadView('admin.Inventory.invoice',compact('stocks'));
        $pdf->stream('invoice.pdf');
        return $pdf->download('invoice.pdf');
    }
    public function stockOutInvoice(){
        $stockOuts= Product::where('quantity','<',1)->get();
        $pdf = PDF::loadView('admin.Inventory.stockOutInvoice',compact('stockOuts'));
        $pdf->stream('invoice.pdf');
        return $pdf->download('invoice.pdf');

    }

    public function Sales(){
        $sales = OrderDetails::all();
        return view('admin.Inventory.salesContain',compact('sales'));
    }
    public function salesInvoice(){
        $sales = OrderDetails::all();
        $sale = PDF::loadView('admin.Inventory.salesInvoice',compact('sales'));
        $sale->stream('sales.pdf');
        return $sale->download('sales.pdf');
    }

    public function sellerDetails($id){
        $seller = Seller::find($id);
        $id = $seller->id;
        Session::put('id',$id);
        return view('admin.Seller.viewDetails',compact('seller'));
    }

    public function sellerProduct($id){
        $sellerProducts = Product::where('seller_id',$id)->get();
       return view('admin.Seller.productContains',compact('sellerProducts'));
    }

    public function publishedProduct($id){
        $published = Product::find($id);
        if($published->published==0){
            $published->published = 1;
            $published->save();
        }else{
            $published->published = 0;
            $published->save();
        }
        return redirect()->back();
    }

    public function sellerOrder($id){
        $orders = Orderdetails::where('seller_id',$id)->orderBy('id','desc')->get();
       return view('admin.Seller.orderContain',compact('orders'));
    }

    public function sellerSales($id){
        $sales = Orderdetails::where('seller_id',$id)
                            ->orderBy('id','desc')
                            ->get();
        $salerId = $id;
        Session::put('id',$salerId);
        return view('admin.Seller.saleContain',compact('sales'));
    }

    public function sellerSalesInvoice(){
        $id = Session::get('id');
        $sales = Orderdetails::where('seller_id',$id)
                ->orderBy('id','desc')
               ->get();
        $sale = PDF::loadView('admin.Seller.salesInvoice',compact('sales'));
        $sale->stream('sales.pdf');
        return $sale->download('sales.pdf');

    }
}
