<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    //
    public function index()
    {
    	$Roles = Role::all();
    	return view('Role.index')->with('Roles',$Roles);
    }

    public function add(Request $Request)
    {
    	$role = new Role();
    	$role->name = $Request['name'];
    	$role->description = $Request['description'];
    	$role->active = true;
    	$role->save();

    	return redirect()->action('RoleController@index');
    }

    public function edit($id)
    {
    	$role = Role::find($id);
    	return view('Role.edit')->withRole($role);
    }

    public function save(Request $Request,$id)
    {
    	$role = Role::find($id);
    	$role->update($Request->all());
    	// return $id;
    	return redirect()->action('RoleController@index');
    }
}
