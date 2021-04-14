<?php

namespace App\Models;

use DB;
 
use Illuminate\Database\Eloquent\Model; 

class Unit extends Model  
{ 
     protected $guarded = []; 
	
     protected $table='unit';
     protected $fillable=['name','id'];
     protected function getall()
    {
        return DB::table('unit') 
                ->select('name','id')  
                ->orderBy('name', 'asc') 
                ->paginate(25);   
   
      }

 
}
