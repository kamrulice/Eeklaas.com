<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Notifications\VerifyRegistration;
use Auth;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()

    {
        if(Auth::check() && Auth()->user()->role_id== 1){
            $this->redirectTo = route('admin.dashboard');
        }else{
            $this->redirectTo = route('user.dashboard');
        }
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {


        $request->validate([
            'email' => 'required|email',
            'password'=> 'required',
        ]);

        // find user by this email



        $user = User::where('email', $request->email)->first();
         // dd ($user);
        if($user->status == 1){
            // dd ('login');
            // login this user
            if(Auth::guard('web')->attempt(['email' => $request->email,'password'=> $request->password],$request->remember_token))
            {
                // Log Him Now

                return redirect()->intended(route('admin.dashboard'));
            }else{

                return redirect()->back()->with('errorMsg','Invalid Login.Please Enter Correct Email or Password');
            }
        }else
        {
            // send him a token

            if (!is_null($user)) {
                $user->notify(new VerifyRegistration($user));
                session()->flash('success','A New confirmation email has sent to you.... Please Check and confirm your email');
                return back();
            }else{
                session()->flash('errors','Please Login First');
                return redirect()->route('login');
            }

        }
    }



    public function phone()
    {
        $loginType = request()->input('phone');
        $this->phone= filter_var($loginType,FILTER_VALIDATE_EMAIL) ? 'email':'phone';
        request()->merge([$this->phone=>$loginType]);
        return property_exists($this, 'phone') ? $this->phone : 'email';
    }


}
