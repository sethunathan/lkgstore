<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*  $categories = Category::with('children')
            ->whereNull('parent_category_id')
            ->get(); */
        $categories = Category::with('parent')->get();

        return view('admin.category', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::with('children')
                        -> whereNull('parent_category_id')
                        -> get(); 

        return view('admin.category_create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* $data = $request->validate([
            'name.en' => ['required', 'unique:categories', 'max:55'],
        ]);
         */

        $category = new Category([
            'name' => [
                'ta' => ucfirst(strtolower($request->name['ta'])),
                'en' => ucfirst(strtolower($request->name['en']))
            ],
            'description' => [
                'ta' => ucfirst(strtolower($request->description['ta'])),
                'en' => ucfirst(strtolower($request->description['en']))
            ],
            'parent_category_id' => $request->parent_category_id,
            ]);
        
        $category->save();
         //Store Image
         if($request->hasFile('image') && $request->file('image')->isValid()){
            $category->addMediaFromRequest('image')->toMediaCollection('images');
        }

        return redirect('admin/category')->with('status', 'Category created successfully !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $categories = Category::whereNull('parent_category_id')->get();
        return view('admin.edit_category',compact('categories','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
