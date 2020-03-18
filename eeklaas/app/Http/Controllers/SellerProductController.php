<?php

namespace App\Http\Controllers;

use App\Brand;
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
        dd($quantity);
        $quantities = $quantity->quantity;
        $stock = $quantities+ $request->quantity;
        $quantity->quantity = $stock;
        $quantity->save();
        return redirect()->route('sellerAll.product')->with('msg','Quantity Successfully Saved');
    }

    public function sellerAddDiscount(Request $request){
        $product = Product::where('id',$request->id)->first();
        $product->status = $request->status;
        $product->offer_price = $request->offer_price;
        $product->save();
        return redirect()->route('sellerAll.product')->with('msg','Discount Successfully Saved');
    }

    public function sellerOrderProduct(){
        $id =  Session::get('sellerId');
        $orders = Shipping::where('seller_id',$id)
            ->orderBy('id','desc')
            ->paginate(10);
        return view('frontend.pages.Seller.orderStatus',compact('orders'));
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
        $sales = Shipping::where('seller_id',$id)
            ->where('status',1)
            ->orderBy('id','desc')
            ->paginate(10);
        return view('frontend.pages.Seller.reportsContain',compact('sales'));
    }

    public function sellerProductInvoice(){
        $id =  Session::get('sellerId');
        $sales = Shipping::where('status',1)
                        ->where('seller_id',$id)
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
        $sales = Shipping::where('seller_id',$id)
            ->where('status',1)
            ->get();
        $total = 0;
        foreach ($sales as $sale){
            $total +=$sale->total_price;
        }
        $id =  Session::get('sellerId');
        $dues = Shipping::where('seller_id',$id)->get();
        $dueTotal = 0;
        foreach ($dues as $due){
            $dueTotal +=$due->total_price;
        }

        return view('frontend.pages.Seller.transaction',compact('total','dueTotal'));
    }
}




