<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Role;
use App\Notifications\VerifyRegistration;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
//= '/admin/dashboard';
    protected $redirectTo ;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $users=User::where('id',Auth()->user()->id)->first();
//        $roleId= $users->role_id;
        if(Auth::check() && Auth()->user()->role_id== 1){
            $this->redirectTo = route('admin.dashboard');
        }else{
            $this->redirectTo = route('user.dashboard');
        }
        $this->middleware('guest')->except('logout');

    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'street_address' => ['required'],
            'phone' => ['required', 'max:13', 'min:8'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */

    protected function register(Request $request)
    {
        // return $request;

      $user = User::create([
            'name' => $request->name,
            'street_address' => $request->street_address,
            'phone' => $request->phone,
            'email' => $request->email,
            'ip_address' => $request->ip(),
            'password' => Hash::make($request->password),
            'status'=>0,
            'remember_token' => str_random(50),
        ]);

      // dd($user);





        $user->notify(new VerifyRegistration($user));

        return back()->with('successMsg','A confirmation email has sent to you.... Please Check and confirm your email');

    }

    // protected function create(array $data)
    // {

    //     $user = User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'phone' => $data['phone'],
    //         'ip_address' => \Request::ip(),
    //         'password' => Hash::make($data['password']),
    //         'remember_token' => Str::random(50),
    //         'status'=> ['0'],
    //     ]);

    //     dd($user);

    //     $user->notify(new VerifyRegistration($user));

    //     return back()->with('successMsg','A confirmation email has sent to you.... Please Check and confirm your email');
    // }

    // public function verifyEmailFirst()
    // {
    //     return view('email.verifyEmailFirst');
    // }


}
