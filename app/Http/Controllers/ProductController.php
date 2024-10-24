<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'count' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price' => 'required|numeric',
        ]);

        $product = new Product([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'description' => $request->description,
            'count' => $request->count,
            'image' => $request->image,
            'price' => $request->price,
        ]);

        $product->save();

        return redirect('/admin/product')->with('success', 'Product created successfully');
    }


    public function createNew(){
        $categories = Category::all();
        return view('admin.product.create', ['categories' => $categories]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'category_id'=>'required',
            'name'=>'required|string|max:255',
            'description'=>'required|string',
            'price'=>'required|numeric',
        ]);

        $product = Product::find($id);
        $product->category_id = $request->category_id;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->save();

        return redirect('/admin/product')->with('success', 'Product updated successfully');
    }

    public function delete($id){
        $product = Product::find($id);
        $product->delete();

        return redirect('/admin/product')->with('success', 'Product deleted successfully');
    }

    public function show($id){
        $product = Product::find($id);
        return view('admin.product.show', ['product' => $product]);
    }
}
