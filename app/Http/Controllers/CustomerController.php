<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function index()
    {
    	$Customers = Customer::all();
    	return view('Customer.index')->with('Customers',$Customers);
    }

    public function new()
    {
    	return view('Customer.add');
    }

     public function add(Request $Request)
    {
    	$customer = new Customer($Request->all());
    	$customer->save();
    	return redirect()->action('CustomerController@index');
    }

    public function edit(Customer $id)
    {
    	return view('Customer.edit')->with('Customer',$id);
    }

    public function save(Request $Request,Customer $id)
    {
    	$id->update($Request->all());
    	return redirect()->action('CustomerController@index');
    }
}
