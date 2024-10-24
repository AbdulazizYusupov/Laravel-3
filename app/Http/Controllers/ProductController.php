<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $datas = Category::all();
        return view('Product.index',['models' => $products,'datas' => $datas]);
    }
    public function create()
    {
        $datas = Category::all();
        return view('Product.add',['models' => $datas]);
    }
    public function product(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'price' => 'required',
            'count' => 'required',

        ]);
        $product = new Product();
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->price = $request->price;
        $product->count = $request->count;
        $product->save();
        return redirect('/product');
    }
    public function destroy(Request $request)
    {
        // dd($request);
        $id = $request->id;
        $destroy = Product::findOrFail($id);
        $destroy->delete();
        return redirect('/product');
    }
    public function show(Request $request)
    {
        $datas = Category::all();
        $id = $request->id;
        $data = Product::findOrFail($id);
        return view('Product.show',['models' => $data,'datas' => $datas]);
    }
}
