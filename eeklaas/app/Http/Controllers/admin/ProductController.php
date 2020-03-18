<?php

namespace App\Http\Controllers\admin;

use App\Category;
use Illuminate\Support\Str;
use App\Product;
use App\Brand;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ProductImage;
use Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $products = Product::all();
        $products = Product::with(['category'])->orderBy('created_at','DESC')->get();
        $categories = Category::all();
        $brands = Brand::all();
        // dd($brands);
        return view('admin.product.index',compact('products','categories','brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('created_at','DESC')->get();
        $brands = Brand::orderBy('created_at','DESC')->get();
      return view('admin.product.create',compact('categories','brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // id  category_id     brand_id    title   description     slug    quantity    price   status  offer_price     admin_id    created_at  updated_at
     // return $request;

        $this->validate($request,[
          'category'=>'required',
          'subcategory'=>'required',
          'brand'=>'required',
          'title'=>'required',
          'description'=>'required',
          'price'=>'required',
        ]);

        $product = new Product();
        $product->category_id = $request->category;
        $product->sub_category_id = $request->subcategory;
        $product->brand_id = $request->brand;
        $product->title = $request->title;
        $product->slug = str::slug($request->title);
        $product->description=$request->description;
        $product->price=$request->price;
        $product->save();
        return redirect()->route('products.image')->with('successMsg','Product Successfully Saved, Now Upload product Image');
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
      $products = Product::where('id',$id)->first();
      $productImages = ProductImage::where('id',$id)->get();
      $categories = Category::all();
      $brands = Brand::all();
      return view('admin.product.edit',compact('products','categories','brands','productImages'));
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

        $product = Product::find($id);
        if($request->published==1){
            $product->published = 1;
            $product->save();
        }else{
            $product->published = 0;
            $product->reject = $request->reject;
            $product->save();
        }

        return redirect()->route('product.index')->with('successMsg','Product Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $product = Product::find($id);
        if (!is_null($product)) {
            $product->delete();
        }
        //delete all images
        foreach ($product->images as $img) {
            $file_name = $img->image;
            if (file_exists("uploads/products/" . $file_name)) {
                unlink("uploads/products/" . $file_name);
            }
            $img->delete();
        }



      //   $product = Product::find($id);
      // if (file_exists('uploads/products/'.$product->image))
      // {
      //     unlink('uploads/products/'.$product->image);
      // }
      $product->delete();
      return redirect()->back()->with('successMsg','Product successfully Deleted');
    }
}
