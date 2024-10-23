<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Product;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index',);
    }

    public function Users(){
        $users = User::all()->toArray();
        return view('admin.pages.tables.data',['users'=>$users]);
    }

    public function Posts(){
        $posts = Post::all()->toArray();
        return view('admin.pages.tables.jsgrid',['posts'=>$posts]);
    }

    public function Products(){
        $products = Product::all()->toArray();
        return view('admin.pages.tables.simple',['products'=>$products]);
    }

    public function Forms(){
        return view('admin.pages.tables.forms');
    }
}
