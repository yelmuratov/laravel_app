<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;
use App\Models\Comment;
use App\Models\Like;

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

    public function Comments(){
        $comments = Comment::all()->toArray();
        return view('admin.pages.tables.comments',['comments'=>$comments]);
    }

    public function Likes(){
        $likes = Like::all()->toArray();
        return view('admin.pages.tables.likes',['likes'=>$likes]);
    }

    public function Orders(){
        $orders = Order::all()->toArray();
        return view('admin.pages.tables.orders',['orders'=>$orders]);
    }

    public function Categories(){
        $categories = Category::all()->toArray();
        return view('admin.pages.tables.categories',['categories'=>$categories]);
    }

    public function Forms(){
        return view('admin.pages.tables.forms');
    }
}
