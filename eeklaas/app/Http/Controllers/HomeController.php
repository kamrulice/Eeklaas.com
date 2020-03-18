<?php
namespace App\Helpers;

namespace App\Http\Controllers;

use App\Email;
use App\Post;
use App\Rating;
use Illuminate\Support\Facades\Input;

use App\Helpers\GravaterHelper;
use App\Category;
use App\SubCategory;
use App\Brand;
use App\Enjoy;
use App\Order;
use App\Bfast;
use App\Product;
use App\Slider;
use App\Fslider;
use App\About;
use App\User;
use DB;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      $orders = DB::table('shippings')
            ->select('product_id', DB::raw('count(*) as total'))
            ->groupBy('product_id')
            ->orderBy('product_id','desc')
            ->pluck('total','product_id')->take(5);
              return view('frontend.pages.index',compact('orders'));

      $sliders=Slider::orderBy('id','desc')->take(3)->get();
      $abouts=About::all();
      $enjoys=Enjoy::all();
      $bfasts=Bfast::all();
      $fsliders=Fslider::all();
         return view('frontend.pages.index',compact('products','id','cat_id','product','sliders','categories','abouts','enjoys','products','product_items','bfasts','fsliders','orders'));

    }

    public function list($id)
    {

      $subcategory_product= Product::where('sub_category_id',$id)->get();
      $id = $id;
      return view('frontend.pages.products.product_list',compact('subcategory_product','id'));
    }


    public function show($id)
    {
      $product= Product::where('id',$id)->first();
      $ratings = Rating::where('product_id',$id)->get();
      if (!is_null($product)) {
        return view('frontend.pages.show',compact('product','ratings'));

      }else{
        session()->flash('errors','There is no products in this url');
        return redirect()->route('/');
      }
    }
    public function send(Request $request){

        $this->validate($request, [
            'email'=> 'required'
        ]);

        if (Email::where('email',Input::get('email'))->exists()) {

            return redirect()->back()->with('message','Email Already Exist');

        }else{
            Email::create([
                'email'=> request('email')
            ]);
            return redirect()->back()->with('message','News Letter Sent Successfull');

        }

    }

    public function product_show($id)
    {
      $products = Product::where('sub_category_id',$id)->get();
      // dd($products);
      // $products= SubCategory::find($id)->product();
      $subcategories=SubCategory::all();
       return view('frontend.pages.index',compact('products','subcategories'));

    }

    public function best_sale($id)
    {
      $product= Product::where('id',$id)->first();
      if (!is_null($product)) {
        return view('frontend.pages.show',compact('product'));

      }else{
        session()->flash('errors','There is no products in this url');
        return redirect()->route('/');
      }
    }


    public function search(Request $request)
    {

      $search = $request->search;
        $search_products = Product::orWhere('title','like','%'.$search.'%')
        ->orWhere('description','like','%'.$search.'%')
        ->orWhere('slug','like','%'.$search.'%')
        ->orWhere('price','like','%'.$search.'%')
        ->orWhere('quantity','like','%'.$search.'%')
        ->orderBy('id','DESC')
        ->paginate(9);
        return view('frontend.pages.search',compact('search','search_products'));
    }

    public function getsubcatContent($id)
    {
        $products = Product::where('published',1)
                            ->where('sub_category_id',$id)
                            ->get();
                return $products;

      }

      public function getbrand($id){
          $products = Product::where('published',1)
              ->where('brand_id',$id)
              ->get();

          return $products ;
      }

      public function productRating(Request $request){
        $rating = new Rating();
        $rating->name = $request->name;
        $rating->product_id = $request->product_id;
        $rating->email = $request->email;
        $rating->rating = $request->rating;
        $rating->message = $request->message;
        $rating->save();
          $user = User::first();
          $post = Post::first();

          $rating = $post->rating([
              'title' => 'This is a test title',
              'body' => 'And we will add some shit here',
              'customer_service_rating' => 5,
              'quality_rating' => 5,
              'friendly_rating' => 5,
              'pricing_rating' => 5,
              'rating' => 5,
              'recommend' => 'Yes',
              'approved' => true, // This is optional and defaults to false
          ], $user);

          dd($rating);
          return redirect()->back();
      }


}
