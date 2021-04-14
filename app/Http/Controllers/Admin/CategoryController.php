<?php

namespace App\Http\Controllers\Admin;

use DB;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
   
	 
    public function index()
    { 
        $categories = Category::with('parent')->get();

        return view('admin.category', compact('categories'));
    }
	
    
    public function create()
    {
        $categories = Category::with('children')
                        -> whereNull('parent_category_id')
                        -> get(); 

        return view('admin.category_create', compact('categories'));
    }

     
    public function store(Request $request)
    {  

        $category = new Category([
           'name_ta' => ucfirst(strtolower($request->name_ta)),
           'name_en' => ucfirst(strtolower($request->name_en)),
           'description_ta' =>ucfirst(strtolower($request->description_ta)),
           'description_en' => ucfirst(strtolower($request->description_en)),
           'parent_category_id' => $request->parent_category_id,
            ]); 
        $category->save();
        
         if($request->hasFile('image') && $request->file('image')->isValid()){
            $category->addMediaFromRequest('image')->toMediaCollection('images');
        }

        return redirect('admin/category')->with('status', 'Category created successfully !');
    }

    
    public function show(Category $category)
    {
       
    }
 
    public function edit(Category $category)
    {
        $categories = Category::whereNull('parent_category_id')->get();
	
        return view('admin.edit_category',compact('categories','category'));
    }

  
    public function update(Request $request)
    {
        Category::where('id',$request->id)->update([         
        'name_en'=>$request->name_en,
        'name_ta'=>$request->name_ta,
        'description_en'=>$request->description_en,
        'description_ta'=>$request->description_ta,
        'parent_category_id'=>$request->parent_category_id]);
        
        $msg =['message' => 'Category Updated successfully!'];
         return  redirect('admin/category')->with($msg);
    }
 
    
    public function destroy($id)
    {
		DB::table('categories')->where('id',$id)->delete();
        $msg =['message' => 'Unable to Delete!','type' => 'warning'];
        return  redirect('admin/category')->with($msg);
    }
}
