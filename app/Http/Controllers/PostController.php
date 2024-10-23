<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function create(Request $request){
        $request->validate([
            'category_id'=>'required',
            'title'=>'required|string|max:255',
            'content'=>'required|string',
        ]);

        $post = new Post([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'content' => $request->content,
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
}
