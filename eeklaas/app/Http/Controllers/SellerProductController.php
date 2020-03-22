<?php

namespace App\Http\Controllers;

use App\Brand;
use App\OrderManage;
use App\OrderDetails;
use App\Product;
use App\ProductImage;
use App\Shipping;
use App\SubCategory;
use App\Category;
use PDF;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use DB;
use App\paid;
use App\Delivery;


class SellerProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('seller');
    }

    public function sellerProductEdit($id)
    {
        $products = Product::where('id', $id)->first();
        $productImages = ProductImage::where('id', $id)->get();
        $categories = Category::all();
        $subCategory = SubCategory::all();
        $brands = Brand::all();
        return view('frontend.pages.Seller.EditProduct', compact('products', 'categories', 'brands', 'productImages', 'subCategory'));
    }

    public function sellerProductUpdate(Request $request)
    {
        $this->validate($request, [
            'category' => 'required',
            'brand' => 'required',
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'mimes:jpeg,jpg,bmp,png',
        ]);
        $product = Product::where('id', $request->id)->first();
        $slug = str_slug($request->title);

        if (count($request->product_image) >0) {
            $i = 0;
            foreach ($request->product_image as $image) {
                # insert the image
                $img = time() . $i .'.' . $image->getClientOriginalExtension();
                $location = 'uploads/products/' . $img;
                Image::make($image)->save($location);

                $product_image = new ProductImage;
                $product_image->product_id = $product->id;
                $product_image->image = $img;
                $product_image->save();

                $i++;
            }
        }

        $product->seller_id = $request->seller_id;
        $product->category_id = $request->category;
        $product->sub_category_id = $request->subcategory;
        $product->brand_id = $request->brand;
        $product->title = $request->title;
        $product->slug = $slug;
        $product->description = $request->description;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->size = $request->size;
        $product->color = $request->color;
        $product->date_line = $request->date_line;
        $product->save();
        return redirect()->route('sellerAll.product')->with('msg', 'Product Successfully Updated');
    }

    public function sellerProductDelete($id){
        $productDelete = Product::find($id);
        $productDelete->delete();
        return redirect()->route('sellerAll.product')->with('msg', 'Product Successfully Deleted');
    }

    public function sellerAddQuantity(Request $request){
        $quantity = Product::where('id',$request->id)->first();
        $quantities = $quantity->quantity;
        $stock = $quantities+ $request->quantity;
        $quantity->quantity = $stock;
        $quantity->save();
        return redirect()->route('sellerAll.product')->with('msg','Quantity Successfully Saved');
    }

    public function sellerAddDiscount(Request $request){
        $product = Product::where('id',$request->id)->first();
        $offer_price = ($product->price*$request->offer_price)/100;
        $updatePrice = $product->price-$offer_price;
        $product->status = $request->status;
        $product->new_price = $updatePrice;
        $product->offer_price = $request->offer_price;
        $product->save();
        return redirect()->route('sellerAll.product')->with('msg','Discount Successfully Saved');
    }

    public function sellerOrderProduct(){
        $id =  Session::get('sellerId');
       $orders = DB::table('order_details')
                 ->join('order_manages','order_manages.id','=','order_details.order_id')
                  ->select('order_manages.*')
                 ->where('order_details.seller_id',$id)
                 ->paginate(10);
                 
        return view('frontend.pages.Seller.orderStatus',compact('orders'));
    }

    public function sellerOrder($id){
        $seller_id =  Session::get('sellerId');
        $orderView = OrderManage::find($id);
        // dd($orderView);
        $orders = OrderDetails::where('order_id',$orderView->id)
                            ->where('seller_id',$seller_id)
                            ->get();
        $payment = paid::where('id',$orderView->id)->first();
    $shipping = Delivery::where('id',$orderView->shipping_id)->first();
     return view('frontend.pages.Seller.orderViewDetails',compact('orderView','orders','payment','shipping'));
    }

    public function sellerProductStock(){
        $id =  Session::get('sellerId');
        $stocks = Product::where('seller_id',$id)
                        ->where('quantity','>',5)
                        ->orderBy('quantity','desc')
                        ->paginate(10);
        return view('frontend.pages.Seller.stockContain',compact('stocks'));
    }

    public function sellerProductStockOut(){
        $id =  Session::get('sellerId');
        $stockOuts = Product::where('seller_id',$id)
            ->where('quantity','<=',5)
            ->orderBy('quantity','desc')
            ->paginate(10);
        return view('frontend.pages.Seller.stockOutContain',compact('stockOuts'));
    }

    public function sellerProductReports(){
        $id =  Session::get('sellerId');
        $complete = OrderDetails::where('created_at', '>=',Carbon::now()->subDays(7))
            ->where('seller_id',$id)
            ->orderBy('created_at', 'asc')
            ->paginate(10);
        return view('frontend.pages.Seller.reportsContain',compact('complete'));
    }

    public function sellerProductInvoice(){
        $id =  Session::get('sellerId');
        $sales = OrderDetails::where('created_at', '>=',Carbon::now()->subDays(7))
        ->where('seller_id',$id)
        ->orderBy('created_at','asc')
        ->get();
          $sale=PDF::loadView('frontend.pages.Seller.salesInvoice',compact('sales'));
        $sale->stream('sales.pdf');
        return $sale->download('sales.pdf');
    }

    public function sellerStockInvoice(){
        $id =  Session::get('sellerId');
        $stocks = Product::where('quantity','>',5)
            ->where('seller_id',$id)
            ->get();
        $stocks =PDF::loadView('frontend.pages.Seller.stockInvoice',compact('stocks'));
        $stocks->stream('stocks.pdf');
        return $stocks->download('stocks.pdf');
    }

    public function sellerStockOutInvoice(){
        $id =  Session::get('sellerId');
        $stocks = Product::where('quantity','<=',5)
            ->where('seller_id',$id)
            ->get();
        $stocks =PDF::loadView('frontend.pages.Seller.stockOutInvoice',compact('stocks'));
        $stocks->stream('stockOut.pdf');
        return $stocks->download('stockOut.pdf');
    }

    public function sellerProductView($id){
        $products = Product::find($id);
        return view('frontend.pages.Seller.showDetails',compact('products'));
    }

    public function sellerTransaction(){
        $id =  Session::get('sellerId');
        $orders = DB::table('order_details')
                  ->join('order_manages','order_manages.id','=','order_details.order_id')
                   ->select('order_manages.*')
                  ->where('order_details.seller_id',$id)
                  ->get();
        $total = 0;
        foreach ($orders as $sale){
            $total +=$sale->total;
        }
        
        $dues = DB::table('order_details')
        ->join('order_manages','order_manages.id','=','order_details.order_id')
         ->select('order_manages.*')
        ->where('order_details.seller_id',$id)
        ->where('order_manages.is_complete',1)
        ->get();
        $dueTotal = 0;
        foreach ($dues as $due){
            $dueTotal +=$due->total;
        }
        return view('frontend.pages.Seller.transaction',compact('total','dueTotal'));
    }
}




