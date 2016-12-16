<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
     //
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$user_id = Auth::user()->id;
    	$userProfile = new User;
    	$userProfile  = User::find($user_id)->profile()->first();
      if ($userProfile == null)
      {
           $userProfile = new Profile;
      }
    	return view('profile.index')->with('profile',$userProfile);
		
    }


    public function edit(Request $request)
    {
    	
    	 $user_id = Auth::user()->id;
    	 $User = User::find($user_id);
    	 $Profile =  $User->profile;
       $User->name = $request->name;
       $User->save();
       if ($Profile != null)
       {
          $Profile->update($request->all());
       }
       else
       {
          $Profile = new Profile($request->all());
          Auth::user()->profile()->save($Profile);
       }
    	


    	$image = $request->file('profile_image');
    	if ($image != null)
    	{
    		$input['profile_image'] = time().'.'.$image->getClientOriginalExtension();
	        $destinationPath = public_path('/profile_images');
	        $image->move($destinationPath, $input['profile_image']);
       	  $Profile->profile_image = $input['profile_image'];
    		  $Profile->save();
    	}
    	//Session::flash('flash_message', 'Profile successfully updated!');
    	return back(); 
    }
}
