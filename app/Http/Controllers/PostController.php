<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{   
    public function createNew(){
        $categories = Category::all();
        return view('admin.Post.create',['categories' => $categories]);
    }

    public function create(Request $request){
        $request->validate([
            'category_id'=>'required',
            'title'=>'required|string|max:255',
            'content'=>'required|string',   
            'likes'=>'required',
            'dislikes'=>'required',
        ]);

        $post = new Post([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'content' => $request->content,
            'likes' => $request->likes,
            'dislikes' => $request->dislikes,
        ]);

        $post->save();

        return redirect('/admin/posts')->with('success', 'Post created successfully');
    }

    public function update(Request $request, $id){
        $request->validate([
            'category_id'=>'required',
            'title'=>'required|string|max:255',
            'content'=>'required|string',
        ]);

        $post = Post::find($id);
        $post->category_id = $request->category_id;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();

        return redirect('/admin/posts')->with('success', 'Post updated successfully');
    }

    public function delete($id){
        $post = Post::find($id);
        $post->delete();

        return redirect('/admin/posts')->with('success', 'Post deleted successfully');
    }

    public function show($id){
        $post = Post::find($id);
        if($post){
            return view('admin.Post.show', ['post' => $post]);
        }else{
            return response()->json([
                'message' => 'Post not found'
            ]);
        }
    }
}
