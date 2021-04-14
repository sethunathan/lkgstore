<?php

namespace App\Models;

use DB;
 
use Illuminate\Database\Eloquent\Model; 

class Customer extends Model  
{ 
     protected $guarded = []; 
	
    protected $table='customers';
     protected $fillable=['mobile','password','name','id'];
     protected function getall()
    {
        return DB::table('customers') 
                ->select('name','id','password','mobile')  
                ->orderBy('name', 'asc') 
                ->paginate(1);   
   
      }

 
}
