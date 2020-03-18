<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Seller;
Use App\SendCode;

class SellerVerifyController extends Controller
{
    public function getVerify(){
        return view('auth.sellerVerify');
    }

    public function postVerify(Request $request){
        if ($seller = Seller::where('code',$request->code)->first()){
            $seller->active=1;
            $seller->code =null;
            $seller->save();
            return redirect('/seller/login')->with('message','your account is active');
        }else{
           return back()->with('message','Verify code is not correct. Please try again');
        }
    }
}
