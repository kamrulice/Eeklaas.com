<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthController extends Controller
{
    public function redirect() {
        return Socialite::driver('facebook')->redirect();
    }

    public function callback() {

            $user = Socialite::driver('facebook')->user();

            $findEmail = User::where('email',$user->getEmail())->first();
            if($findEmail){
                Auth::login($findEmail);
                return redirect()->route('user.dashboard');
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'facebook_id'=> $user->id
                ]);

                Auth::login($newUser);

                return redirect()->route('user.dashboard');
            }
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {

            $user = Socialite::driver('google')->user();


            $finduser = User::where('email', $user->getEmail())->first();


            if($finduser){

                Auth::login($finduser);

                return redirect()->route('user.dashboard');

            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id
                ]);

                Auth::login($newUser);

                return redirect()->route('user.dashboard');
            }

        } catch (Exception $e) {
            return redirect('/login');
        }
    }
}
