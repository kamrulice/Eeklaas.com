<?php

namespace App\Http\Controllers\admin;

use App\Email;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmailController extends Controller
{
    public function send(Request $request){

        $this->validate($request, [
            'email'=> 'required'
        ]);
//        $emailCheck = Email::where('email', '=', Input::get('email'))->get();
//        dd($emailCheck);
        if (Email::where('email', '=', Input::get('email'))->exists()) {

            return redirect()->back()->with('message','Email Already Exist');

        }else{
            Email::create([
                'email'=> request('email')
            ]);
            return redirect()->back()->with('message','NEWSLETTER SEND SUCCESSFULLY');

        }

    }
    public function EmailShow(){
        $emails = Email::all();
        return view('admin.Email.emailContain',compact('emails'));
    }
    public function emailEdit($id){
        $email = Email::find($id);
        return view('admin.Email.editContain',compact('email'));
    }
    public function updateEmail(Request $request){
        $this->validate($request, [
            'email'=>'required',
        ]);
        $updateEmail = Email::where('id', $request->id)->first();
        $updateEmail->email = $request->email;
        $updateEmail->save();
        return redirect()->route('email.content')->with('message','Email Updated Successfully');
    }
    public function deleteEmail($id){
        $deleteEmail = Email::find($id);
        $deleteEmail->delete();
        return redirect()->route('email.content')->with('message','Email Deleted Successfully');
    }
}
