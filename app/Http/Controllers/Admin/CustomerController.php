<?php

namespace App\Http\Controllers\Admin;

use DB;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
 

class CustomerController extends Controller
{
   
    public function index()
    { 
        $customers=Customer::getall();
        return view('admin.customers.index',compact('customers'));
    }
 
    public function create()
    {
		
        return view('admin.customers.create');
    }

     
    public function store(Request $request)
    {
	   //
	   
	   //
	  
		Customer::create(['id'=>$request->id,         
           'name' => ucfirst(strtolower($request->name)),
           'mobile' => $request->mobile,
           'password' => $request->password,
            ]);  
			$msg=''; 
         return  redirect('admin/customers')->with($msg);  
    }
 
    public function show(Request $request)
    {
           
    } 
    public function edit($id)
    { 
        $customer = Customer::find($id); 
        return view('admin.customers.edit',compact('customer'));
	 
    } 
    
    public function update(Request $request)
    {
	  
       Customer::where('id',$request->id)->update([         
           'name' => ucfirst(strtolower($request->name)),
           'mobile' => $request->mobile,
           'password' => $request->password,
            ]);  
			$msg=''; 
         return  redirect('admin/customers')->with($msg);  
       
    } 
    
    public function destroy($id)
    {
        DB::table('customers')->where('id',$id)->delete();
        $msg =['message' => 'Customer Record Deleted!','type' => 'warning'];
        return  redirect('admin/customers')->with($msg);
    }
}
