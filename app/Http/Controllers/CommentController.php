<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function create(Request $request){
        $request->validate([
            'post_id'=>'required',
            'user_id'=>'required',
            'content'=>'required|string',
        ]);

        $comment = new Comment([
            'post_id' => $request->post_id,
            'user_id' => $request->user_id,
            'content' => $request->content,
        ]);

        $comment->save();

        return redirect()->back()->with('success', 'Comment created successfully');
    }

    public function update(Request $request, $id){
        $request->validate([
            'post_id'=>'required',
            'user_id'=>'required',
            'content'=>'required|string',
        ]);

        $comment = Comment::find($id);
        $comment->post_id = $request->post_id;
        $comment->user_id = $request->user_id;
        $comment->content = $request->content;
        $comment->save();

        return redirect()->back()->with('success', 'Comment updated successfully');
    }

    public function delete($id){
        $comment = Comment::find($id);
        $comment->delete();

        return redirect()->back()->with('success', 'Comment deleted successfully');
    }

    public function show($id){
        $comment = Comment::find($id);
        return view('admin.Comment.show', ['comment' => $comment]);
    }
}
