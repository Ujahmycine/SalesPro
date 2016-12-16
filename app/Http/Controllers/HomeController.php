<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Profile;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
   

     public function index(Request $request)
    {
        $user_id = Auth::user()->id;
        $userProfile = User::find($user_id)->profile()->first();
        if ($userProfile == null)
        {
            $userProfile = new Profile;
            $request->session()->put('profile_image', 'img.jpg');
        }
        else
        {
           $request->session()->put('profile_image', $userProfile->profile_image); 
        }
        
        return view('home');
    }

    public function ChangePassword(Request $request)
    {
        return view('auth.passwords.ChangePassword');
    }

    public function UpdatePassword(Request $request)
    {
      
        $credentials = $request->only(
                    'email', 'password', 'password_confirmation','phone_number'
            );

        $user = Auth::user();
        $user->password = bcrypt($credentials['password']);
        $user->phone_number = $credentials['phone_number'];
        $user->save();
        return view('home');
        
    }

}
