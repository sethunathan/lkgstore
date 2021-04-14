<?php

namespace App\Http\Controllers\Admin;

use DB;
use App\Http\Controllers\Controller;
use App\Models\Unit;
use Illuminate\Http\Request;
 

class UnitController extends Controller
{
   
    public function index()
    { 
        $unit=Unit::getall();
        return view('admin.unit.index',compact('unit'));
    }
 
    public function create()
    {
		
        return view('admin.unit.create');
    }
     private  function getmax()
    {
        
        $retvalue=Unit::max('id');
        if ($retvalue === null)
        {
            $retvalue=1;
            $stringlen=1;
        }
        elseif ($retvalue >=1)
        {
            $stringlen=$retvalue;
            $retvalue=$retvalue+1;
        }         
         return $retvalue;

    }   
     
    public function store(Request $request)
    {
	   
	    $id= $this->getmax();     
	  
		Unit::create(['id'=>$id,         
           'name' => ucfirst(strtolower($request->name))
            ]);  
			$msg=''; 
         return  redirect('admin/unit')->with($msg);  
    }
 
    public function show(Request $request)
    {
           
    } 
    public function edit($id)
    { 
        $unit = Unit::find($id); 
        return view('admin.unit.edit',compact('unit'));
	 
    } 
    
    public function update(Request $request)
    {
	  
       Unit::where('id',$request->id)->update([         
           'name' => ucfirst(strtolower($request->name))          
            ]);  
			$msg=''; 
         return  redirect('admin/unit')->with($msg);  
       
    } 
    
    public function destroy($id)
    {
        DB::table('units')->where('id',$id)->delete();
        $msg =['message' => 'Unit Record Deleted!','type' => 'warning'];
        return  redirect('admin/unit')->with($msg);
    }
}
