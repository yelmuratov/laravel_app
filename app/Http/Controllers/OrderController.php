<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
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
        return response()->json([
            'message' => 'Order created',
            'order' => $order
        ]);
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
            return response()->json([
                'message' => 'Order deleted'
            ]);
        }else{
            return response()->json([
                'message' => 'Order not found'
            ]);
        }
    }
}
