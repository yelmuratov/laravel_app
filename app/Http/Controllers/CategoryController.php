<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //create methods post method post
    public function create(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $data = $request->all();
        $category = Category::create($data);
        $category->save();
        return redirect()->back()->with('success', 'Category created successfully');
    }

    //update methods post method put
    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $category = Category::find($id);
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();
        return redirect()->back()->with('success', 'Category updated successfully');
    }

    //delete methods post method delete
    public function delete($id){
        $category = Category::find($id);
        $category->delete();
        return redirect()->back()->with('success', 'Category deleted successfully');
    }

    public function show($id){
        $category = Category::find($id);
        return view('admin.Category.show', ['category' => $category]);
    }
}
