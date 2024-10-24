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
    try {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'count' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Image validation
        ]);

        $productData = [
            'category_id' => $request->category_id,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'count' => $request->count,
        ];

        if ($request->hasFile('image')) {
            // Store the image and get the path
            $imagePath = $request->file('image')->store('images/products', 'public');
            $productData['image'] = $imagePath; // Save the image path
        }

        Product::create($productData);

        return redirect('/admin/products')->with('success', 'Product created successfully');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Error creating product: ' . $e->getMessage());
    }
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
