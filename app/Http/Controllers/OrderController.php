<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        $datas = Product::all();
        return view('Order.index',['models' => $orders,'datas' => $datas]);
    }
    public function create()
    {
        $datas = Product::all();
        return view('Order.add',['models' => $datas]);
    }
    public function order(Request $request)
    {
        $request->validate([
            'product_id' => 'required',
            'quantity' => 'required',
            'summ' => 'required',

        ]);
        $order = new Order();
        $order->product_id = $request->product_id;
        $order->quantity = $request->quantity;
        $order->summ = $request->summ;
        $order->save();
        return redirect('/order');
    }
    public function destroy(Request $request)
    {
        // dd($request);
        $id = $request->id;
        $destroy = Order::findOrFail($id);
        $destroy->delete();
        return redirect('/order');
    }
    public function show(Request $request)
    {
        $datas = Product::all();
        $id = $request->id;
        $data = Order::findOrFail($id);
        return view('Order.show',['models' => $data,'datas' => $datas]);
    }
}
