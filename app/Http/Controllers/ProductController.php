<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function create(Request $request){
        $request->validate([
            'category_id'=>'required',
            'name'=>'required|string|max:255',
            'description'=>'required|string',
            'price'=>'required|numeric',
            'count'=>'required|integer',
        ]);

        $product = new Product([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'count' => $request->count,
        ]);

        $product->save();

        return redirect('/admin/products')->with('success', 'Product created successfully');
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
