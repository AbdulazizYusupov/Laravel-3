<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $models = Category::all();
        return view('Category.index', ['models' => $models]);

    }
    public function create()
    {
        return view('Category.add');
    }
    public function category(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        return redirect('/');
    }
    public function destroy(Request $request)
    {
        // dd($request);
        $id = $request->id;
        $destroy = Category::findOrFail($id);
        $destroy->delete();
        return redirect('/');
    }
    public function show(Request $request)
    {
        $id = $request->id;
        $data = Category::findOrFail($id);
        return view('Category.show',['models' => $data]);
    }
}
