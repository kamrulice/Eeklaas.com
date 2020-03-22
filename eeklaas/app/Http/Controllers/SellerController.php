<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Product;
use App\ProductImage;
use App\Shipping;
use App\OrderManage;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Seller;
use App\OrderDetails;
use App\SendCode;
use Illuminate\Support\Str;
use Image;
use PDF;
use DB;

class SellerController extends Controller
{
    public function __construct()
    {
       $this->middleware('seller');
    }

    public function sellerRegister()
    {
        return view('auth.sellerRegister');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'password' => 'required',

        ]);

        $seller = Seller::create([
            'name' => request('name'),
            'email' => request('email'),
            'phone' => request('phone'),
            'active' => 0,
            'password' => Hash::make(request('password')),
        ]);
        if ($seller) {
            $seller->code = SendCode::sendCode($seller->phone);
            $seller->save();
        }
        return redirect('/seller/verify');
    }

    public function loginForm()
    {
        return view('auth.sellerLogin');
    }

    public function Sellerstore(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $seller = Seller::where('email',$request->email)->first();
        $customerId = $seller->id;
        $customerName = $seller->name;
        $customerImage = $seller->ProfileImage;
        Session::put('sellerId', $customerId);
        Session::put('sellerName', $customerName);
        Session::put('sellerImage', $customerImage);
        if ($seller->active == 1) {

            if (Auth::guard('seller')->attempt(['email' => $request->email, 'password' => $request->password])) {
                return redirect()->intended(route('seller.dashboard'));
            } else {

                return redirect()->back()->with('errorMsg', 'Invalid Login.Please Enter Correct Email or Password');
            }
        }

    }

    public function sellerDashboard(){
        $id =  Session::get('sellerId');
        $seller = Seller::find($id);

        $complete = OrderDetails::where('seller_id',$id)->orderBy('id','desc')->get();

        $pending = DB::table('order_details')
                 ->join('order_manages','order_manages.id','=','order_details.order_id')
                  ->select('order_manages.id')
                 ->where('order_details.seller_id',$id)
                  ->where('order_manages.is_complete',0)
                  ->get();
         

        $premium = Shipping::where('seller_id',$id)
            ->where('shipping_charge',0)
            ->get();

        $reject = Product::where('seller_id',$id)
            ->where('reject','!=','')
            ->get();

        $currentDate = date('Y-m-d');

        $expiryDate = Product::where('seller_id',$id)
                                ->where('date_line','<=',$currentDate)
                                ->get();


        $dailys = OrderDetails::where('created_at', '>=',Carbon::now()->subDays(7))
            ->where('seller_id',$id)
            ->orderBy('created_at', 'asc')
            ->get();
        $halfMonths = OrderDetails::where('created_at', '>=',Carbon::now()->subDays(15))
            ->where('seller_id',$id)
            ->orderBy('created_at', 'asc')
            ->get();

        $Months =  OrderDetails::where('created_at', '>=',Carbon::now()->subDays(30))
            ->where('seller_id',$id)
            ->orderBy('created_at', 'asc')
            ->get();
            $perDaySales = 0;
            $perWeekSales = 0;
            $perMonthSales = 0;

        foreach ($dailys as $daily){
            $total_price = $daily->product_price*$daily->product_quantity;
            $perDaySales+=$total_price;
        }
        foreach ($halfMonths as $daily){
            $total_price = $daily->product_price*$daily->product_quantity;
            $perWeekSales+=$total_price;
        }
        foreach ($Months as $daily){
            $total_price = $daily->product_price*$daily->product_quantity;
            $perMonthSales+=$total_price;
        }
        return view('frontend.pages.Seller.index',compact('seller','complete','pending','premium','reject','expiryDate','perDaySales','perWeekSales','perMonthSales'));
    }

    public function rejectsProduct(){
        $id =  Session::get('sellerId');
        $rejects = Product::where('seller_id',$id)
            ->where('reject','!=','')
            ->orderBy('id','desc')
            ->paginate(10);
        return view('frontend.pages.Seller.rejectProducts',compact('rejects'));
    }

    public function rejectsDelete($id){
        $deleteProduct = Product::find($id);
        $deleteProduct->delete();
        return redirect()->back()->with('msg','Reject Product Deleted Successfully');
    }

    public function sellerinfo(Request $request){

        $this->validate($request,[
            'ProfileImage'=>'required',
            'NidNumber'=>'required',
            'NidImage'=>'required',
            'address'=>'required',
            'account_number'=>'required',
            'account_name'=>'required',
            'bank_name'=>'required',
            'branch_name'=>'required',
            'checkImage'=>'required',
        ]);

        $image = $request->file('ProfileImage');
        if(!empty($image)){
            $image = $request->file('ProfileImage');
            $imageName =time().$image->getClientOriginalName();
            $directory ='uploads/Seller/';
            $image->move($directory,$imageName);
            $imageUrl = $directory.$imageName;

        }
        else{
            $imageUrl='';
        }

        $imageNid = $request->file('NidImage');
        if(!empty($imageNid)){
            $image = $request->file('NidImage');
            $imageName =time().$image->getClientOriginalName();
            $directory ='uploads/Seller/';
            $image->move($directory,$imageName);
            $NidImageUrl = $directory.$imageName;

        }
        else{
            $NidImageUrl='';
        }

        $Checkimage = $request->file('checkImage');
        if(!empty($Checkimage)){
            $image = $request->file('checkImage');
            $imageName =time().$image->getClientOriginalName();
            $directory ='uploads/Seller/';
            $image->move($directory,$imageName);
            $CheckimageUrl = $directory.$imageName;

        }
        else{
            $CheckimageUrl='';
        }


        $sellerinfo = Seller::where('id',$request->id)->first();
        $sellerinfo->status = $request->status;
        $sellerinfo->ProfileImage = $imageUrl;
        $sellerinfo->NidNumber = $request->NidNumber;
        $sellerinfo->NidImage = $NidImageUrl;
        $sellerinfo->address = $request->address;
        $sellerinfo->account_number = $request->account_number;
        $sellerinfo->account_name = $request->account_name;
        $sellerinfo->bank_name = $request->bank_name;
        $sellerinfo->branch_name = $request->branch_name;
        $sellerinfo->checkImage = $CheckimageUrl;
        $sellerinfo->save();
        return redirect()->back()->with('messag','Your info submit successfully,  Please with for Admin Approval');

    }

    public function product(){
        
        return view('frontend.pages.Seller.addProduct');
    }

    public function productStore(Request $request){
        $this->validate($request,[
            'category'=>'required',
            'subcategory'=>'required',
            'brand'=>'required',
            'title'=>'required',
            'description'=>'required',
            'price'=>'required',
            'quantity'=>'required',
            'date_line'=>'required',
        ]);

        $string = rand();
        $id = "SKU.".$string;

        $product = new Product();
        $product->sku = $id;
        $product->seller_id = $request->seller_id;
        $product->category_id = $request->category;
        $product->sub_category_id = $request->subcategory;
        $product->brand_id = $request->brand;
        $product->title = $request->title;
        $product->slug = str::slug($request->title);
        $product->description=$request->description;
        $product->quantity=$request->quantity;
        $product->price=$request->price;
        $product->size=$request->size;
        $product->color=$request->color;
        $product->date_line=$request->date_line;
        $product->save();

        return redirect()->route('upload.product')->with('msg','Product Save successfully, Now Upload product Image');
    }

    public function productImage(Request $request){
//        return $request->all();
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
        return redirect()->route('seller.dashboard');
    }
    public function productImageUpload(){

        return view('frontend.pages.Seller.imageUpload');
    }

    public function allProductShow(){
        $id =  Session::get('sellerId');
        $products = Product::where('seller_id',$id)
            ->orderBy('id','desc')
            ->paginate(10);
        return view('frontend.pages.Seller.allProduct',compact('products'));
    }
    public function sellerDetails(){
        $id =  Session::get('sellerId');
        $seller = Seller::where('id',$id)->first();
        return view('frontend.pages.Seller.sellerDetails',compact('seller'));
    }

    public function expiryProduct(){

        $currentDate = date('Y-m-d');
        $id =  Session::get('sellerId');
        $expiryDate = Product::where('seller_id',$id)
            ->where('date_line','<',$currentDate)
            ->orderBy('id','desc')
            ->paginate(10);
        return view('frontend.pages.Seller.expiryDateProduct',compact('expiryDate'));
    }

    public function expiryProductInvoice(){
        $currentDate = date('Y-m-d');
        $id =  Session::get('sellerId');
        $expiryDate = Product::where('seller_id',$id)
            ->where('date_line','<',$currentDate)
            ->get();
        $stocks =PDF::loadView('frontend.pages.Seller.expiryProductInvoice',compact('expiryDate'));
        $stocks->stream('expiry Products.pdf');
        return $stocks->download('expiry Products.pdf');
    }

    public function sellerAdvertise(){
        return view('frontend.pages.Seller.advertiseContain');
    }
    public function bannerSave(Request $request){
        $this->validate($request,[
            'category_id'=>'required',
            'title'=>'required',
            'description'=>'required',
            'image' => 'required|mimes:jpeg,jpg,bmp,png',
        ]);
        $image = $request->file('image');
        $slug = str_slug($request->title);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug .'-'. $currentDate .'-'. uniqid() .'.'. $image->getClientOriginalExtension();
            if (!file_exists('uploads/banner'))
            {
                mkdir('uploads/banner', 0777 , true);
            }
            $image->move('uploads/banner',$imagename);
        }else {
            $imagename = 'dafault.png';
        }
        $banner = new Banner();
        $banner->seller_id = $request->seller_id;
        $banner->title=$request->title;
        $banner->category_id=$request->category_id;
        $banner->description=$request->description;
        $banner->image = $imagename;
        $banner->save();
        return redirect()->route('all.banner')->with('successMsg','Banner Successfully Saved');

    }

    public function allBanner(){
        $id =  Session::get('sellerId');
        $banners = Banner::where('seller_id',$id)
                        ->orderBy('id','desc')
                        ->paginate(10);
        return view('frontend.pages.Seller.allBannerContain',compact('banners'));
    }

    public function bannerDelete($id){
        $deleteBanner = Banner::find($id);
        $deleteBanner->delete();
        return redirect()->back()->with('msg','Delete Successfull');
    }

    public function bannerEdit($id){
        $editBanner = Banner::find($id);
        return view('frontend.pages.Seller.editBanner',compact('editBanner'));
    }

    public function bannerShow($id){
        $viewBanner = Banner::find($id);
        return view('frontend.pages.Seller.BannerShow',compact('viewBanner'));
    }

    public function bannerstore(Request $request){
        $this->validate($request,[
            'category_id'=>'required',
            'title'=>'required',
            'description'=>'required',
        ]);
        $banner = Banner::where('id',$request->id)->first();

        $image = $request->file('image');
        $slug = str_slug($request->title);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'. uniqid() .'.'. $image->getClientOriginalExtension();

            if (!file_exists('uploads/banner'))
            {
                mkdir('uploads/banner',0777,true);
            }
            unlink('uploads/banner/'.$banner->image);
            $image->move('uploads/banner',$imagename);
        }else{
            $imagename = $banner->image;
        }

        $banner->title=$request->title;
        $banner->category_id=$request->category_id;
        $banner->description=$request->description;
        $banner->image = $imagename;
        $banner->save();
        return redirect()->route('all.banner')->with('msg','Banner Successfully Saved');

    }

}



