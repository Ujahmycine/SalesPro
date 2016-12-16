<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use App\UserRole;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function Index()
    {
    	$AllUsers = User::all();
    	$User = $AllUsers[0];
        // return ($AllUsers[0]->profile()->first());
    	return View('User.index')->with('AllUsers',$AllUsers);
    }

     public function new()
    {
    	$Roles = Role::all();
    	return View('User.add')->with('Roles',$Roles);
    }

    public function add(Request $Request)
    {
    	$User = new User();
    	$User->name = $Request['name'];
    	$User->email = $Request['email'];
    	$User->password = bcrypt($Request['password']);
    	$User->phone_number = $Request['phone_number'];
    	$User->save();

    	$UserRole = new UserRole();
    	$UserRole->user_id = $User->id;
    	$UserRole->role_id = $Request['role_name'];
    	$UserRole->save();

    	return redirect()->action('UserController@index');
    }

    public function edit(User $id)
    {
    	$Roles = Role::all();
    	return View('User.edit')->with('User',$id)->with('Roles',$Roles);
    }

    public function save(Request $Request,User $id)
    {
    	$id->update($Request->all());

    	$UserRole = UserRole::where('user_id',$id->id)->first();
    	$UserRole->role_id = $Request['role_name'];
    	$UserRole->save();
    	return redirect()->action('UserController@index');
    }
}
