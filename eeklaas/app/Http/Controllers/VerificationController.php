<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;

class VerificationController extends Controller
{
    public function verify($token)
    {
    	$user = User::where('remember_token',$token)->first();
    	if(!is_null($user)){
    		$user->status=1;
    		$user->remember_token=NULL;
    		$user->save();
	    	session()->flash('success','You are registered successfully!! Login Now');
	    	return redirect('login');
	    }else
	    {
	    	session()->flash('errors','Your Token is not matched!!');
	    	return redirect('/');
	    	
	    }
    }
}
