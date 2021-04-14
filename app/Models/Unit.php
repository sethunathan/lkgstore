<?php

namespace App\Models;

use DB;
 
use Illuminate\Database\Eloquent\Model; 

class Unit extends Model  
{ 
     protected $guarded = []; 
	
     protected $table='units';
     protected $fillable=['name','id'];
     protected function getall()
    {
        return DB::table('units') 
                ->select('name','id')  
                ->orderBy('name', 'asc') 
                ->paginate(25);   
   
      }

 
}
