<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    //
     //
    public function index()
    {
    	$Suppliers = Supplier::all();
    	return view('Supplier.index')->with('Suppliers',$Suppliers);
    }

    public function new()
    {
    	return view('Supplier.add');
    }

     public function add(Request $Request)
    {
    	$Supplier = new Supplier($Request->all());
    	$Supplier->save();
    	return redirect()->action('SupplierController@index');
    }

    public function edit(Supplier $id)
    {
    	return view('Supplier.edit')->with('Supplier',$id);
    }

    public function save(Request $Request,Supplier $id)
    {
    	$id->update($Request->all());
    	return redirect()->action('SupplierController@index');
    }
}
