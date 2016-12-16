<?php

namespace App\Http\Controllers;

use App\ProductType;
use App\ProductUnit;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function productUnit()
    {
    	$ProductUnits = productUnit::all();
    	return view('ProductUnit.index')->with('ProductUnits',$ProductUnits);
    }

    public function productType()
    {
    	$ProductType = ProductType::all();
    	return view('ProductType.index')->with('ProductTypes',$ProductTypes);
    }
}
