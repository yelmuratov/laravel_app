<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function createNew(){
        return view('admin.Order.create');
    }
    //crue wirh show method
    public function create(Request $request){
        $request->validate([
            'product_id' => 'required',
            'user_id' => 'required',
            'count' => 'required',
            'total_price' => 'required',
        ]);

        $data = $request->all();
        $order = Order::create($data);
        $order->save();
        return redirect()->back()->with('success', 'Order created successfully');
    }

    public function show($id){
        $order = Order::find($id);
        if($order){
            return view('admin.Order.show', ['order' => $order]);
        }else{
            return response()->json([
                'message' => 'Order not found'
            ]);
        }
    }

    public function update(Request $request, $id){
        $order = Order::find($id);
        if($order){
            $request->validate([
                'product_id' => 'required',
                'user_id' => 'required',
                'count' => 'required',
                'total_price' => 'required',
            ]);
            $data = $request->all();
            $order->fill($data)->save();
            return response()->json([
                'message' => 'Order updated',
                'order' => $order
            ]);
        }else{
            return response()->json([
                'message' => 'Order not found'
            ]);
        }
    }

    public function delete($id){
        $order = Order::find($id);
        if($order){
            $order->delete();
            return redirect()->back()->with('success', 'Order deleted successfully');
        }else{
            return response()->json([
                'message' => 'Order not found'
            ]);
        }
    }
}
