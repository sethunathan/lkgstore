<?php
use Illuminate\Support\Facades\Route;



Route::middleware(['auth','role:admin'])->group(function () {

    
    Route::get('/', function () {

        return view('admin.home');
    });



    Route::resource('category', 'CategoryController');
    Route::resource('customers', 'CustomerController');
    Route::resource('products', 'ProductController');
    Route::resource('units', 'UnitController');
	 
    Route::resource('city', 'CityController');
    Route::resource('place', 'PlaceController');
  
   
Route::put('admin/customers', 'admin\CustomerController@update');
   
Route::put('admin/units', 'admin\UnitController@update');
    

       
    
});

