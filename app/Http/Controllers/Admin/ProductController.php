<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
     
    public function index()
    {
        $products = Product::with('category')->get();

        return view('admin.products.index', compact('products'));
    }
	 
	 private  function getmax()
    {
        
        $retvalue=Product::max('id');
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
     
    public function create()
    {
        $categories = Category::with('children')-> get(); 

        return view('admin.products.create', compact('categories'));
    }

     
    public function store(Request $request)
    {
        $product = new Product([
            'name' => [
                'ta' => ucfirst(strtolower($request->name['ta'])),
                'en' => ucfirst(strtolower($request->name['en']))
            ],
            'description' => [
                'ta' => ucfirst(strtolower($request->description['ta'])),
                'en' => ucfirst(strtolower($request->description['en']))
            ],
            'price' => $request->price,
            'category_id' => $request->category_id,
            ]);
        
        $product->save();
         //Store Image
         if($request->hasFile('image') && $request->file('image')->isValid()){
            $product->addMediaFromRequest('image')->toMediaCollection('images');
        }

        return redirect('admin/products')->with('status', 'Product created successfully !');
    }

     
    public function show(Product $product)
    {
        
    }

     
    public function edit(Product $product)
    {
        
    }

     
    public function update(Request $request, Product $product)
    {
        
    }

     
    public function destroy(Product $product)
    {
         
    }
}
