<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Like;

class LikeController extends Controller
{
    public function create(Request $request){
        $request->validate([
            'product_id' => 'required',
            'user_id' => 'required',
        ]);

        $data = $request->all();
        $like = Like::create($data);
        $like->save();
        return response()->json([
            'message' => 'Like created',
            'like' => $like
        ]);
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
            return response()->json([
                'message' => 'Like deleted'
            ]);
        }else{
            return response()->json([
                'message' => 'Like not found'
            ]);
        }
    }
}
