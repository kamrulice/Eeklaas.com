<?php

namespace App\Http\Controllers;
use App\Category;
use App\SubCategory;
use App\Product;
use App\Slider;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
	public function index()
	{
		$products = Product::orderBy('created_at','DESC')->get();
        return view('frontend.product.index',compact('products'));
	}

	// for showing all product

	public function all($id)
	{
	
		$categories= Category::where('id', $id)->get();
		$sliders=Slider::orderBy('id','desc')->get();
        return view('frontend.pages.products.all_product',compact('products','sliders','categories'));
	}
	public function subCategory($id){
	    $subCategories = Product::where('sub_category_id', $id)->paginate(12);
	    $subCategoryName = SubCategory::where('id',$id)->first();

        return view('frontend.pages.subCategory',compact('subCategoryName','subCategories'));
    }

}
