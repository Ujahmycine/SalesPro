<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/profile', 'ProfileController@index');
Route::patch('/profile/edit', 'ProfileController@edit');

Route::get('/changePassword', 'HomeController@ChangePassword');
Route::patch('/changePassword/save', 'HomeController@UpdatePassword');

Route::get('/users', 'UserController@index');
Route::get('/users/add', 'UserController@new');
Route::post('/users/add', 'UserController@add');
Route::get('/users/edit/{id}', 'UserController@edit');
Route::patch('/users/edit/{id}', 'UserController@save');


Route::get('/customers', 'CustomerController@index');
Route::get('/customers/add', 'CustomerController@new');
Route::post('/customers/add', 'CustomerController@add');
Route::get('/customers/edit/{id}', 'CustomerController@edit');
Route::patch('/customers/edit/{id}', 'CustomerController@save');


Route::get('/suppliers', 'SupplierController@index');
Route::get('/suppliers/add', 'SupplierController@new');
Route::post('/suppliers/add', 'SupplierController@add');
Route::get('/suppliers/edit/{id}', 'SupplierController@edit');
Route::patch('/suppliers/edit/{id}', 'SupplierController@save');

Route::get('/product', 'ProductController@product');
Route::get('/product/add', 'ProductController@addproduct');
Route::post('/product/add', 'ProductController@newproduct');
Route::get('/product/edit/{id}', 'ProductController@editroduct');
Route::patch('/product/edit/{id}', 'ProductController@saveproduct');


Route::get('/productType', 'ProductController@productType');
Route::get('/productType/add', 'ProductController@addproductType');
Route::post('/productType/add', 'ProductController@newproductType');
Route::get('/productType/edit/{id}', 'ProductController@editroductType');
Route::patch('/productType/edit/{id}', 'ProductController@saveproductType');


Route::get('/productUnit', 'ProductController@productUnit');
Route::get('/productUnit/add', 'ProductController@addproductUnit');
Route::post('/productUnit/add', 'ProductController@newproductUnit');
Route::get('/productUnit/edit/{id}', 'ProductController@editroductUnit');
Route::patch('/productUnit/edit/{id}', 'ProductController@saveproductUnit');



Route::get('/roles', 'RoleController@index');
Route::post('/roles/add', 'RoleController@add');
Route::get('/roles/edit/{id}', 'RoleController@edit');
Route::patch('/roles/edit/{id}', 'RoleController@save');