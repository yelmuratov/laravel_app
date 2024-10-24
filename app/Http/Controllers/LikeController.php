<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Like;

class LikeController extends Controller
{
    public function createNew(){
        $likes = Like::all();
        return view('admin.Like.create',['likes' => $likes]);
    }

    public function create(Request $request){
        try{
            $request->validate([
                'post_id' => 'required',
                'user_id' => 'required',
                'like' => 'required',
            ]);
    
            $data = $request->all();
            $like = Like::create($data);
            $like->save();
            return redirect('/admin/likes')->with('success', 'Like created successfully');
        }catch(\Exception $e){
            dd($e);
        }
    }

    public function show($id){
        $like = Like::find($id);
        if($like){
            return view('admin.Like.show', ['like' => $like]);
        }else{
            return response()->json([
                'message' => 'Like not found'
            ]);
        }
    }

    public function update(Request $request, $id){
        $like = Like::find($id);
        if($like){
            $request->validate([
                'product_id' => 'required',
                'user_id' => 'required',
            ]);
            $data = $request->all();
            $like->fill($data)->save();
            return response()->json([
                'message' => 'Like updated',
                'like' => $like
            ]);
        }else{
            return response()->json([
                'message' => 'Like not found'
            ]);
        }
    }

    public function delete($id){
        $like = Like::find($id);
        if($like){
            $like->delete();
            return redirect()->back()->with('success', 'Like deleted successfully');
        }else{
            return response()->json([
                'message' => 'Like not found'
            ]);
        }
    }
}
