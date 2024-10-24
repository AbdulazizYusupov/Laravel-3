<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Like;
use App\Models\Post;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function index()
    {
        $likes = Like::all();
        $datas = Post::all();
        return view('Like.index', ['models' => $likes, 'datas' => $datas]);
    }
    public function create()
    {
        $datas = Post::all();
        return view('Like.add', ['models' => $datas]);
    }
    public function like(Request $request)
    {
        $request->validate([
            'post_id' => 'required',
            'is_active' => 'required',
        ]);
        $like = new Like();
        $like->post_id = $request->post_id;
        if ($request->is_active) {
            $like->is_active = 1;
        } else {
            $like->is_active = 0;
        }

        $like->save();
        return redirect('/like');
    }
    public function destroy(Request $request)
    {
        // dd($request);
        $id = $request->id;
        $destroy = Like::findOrFail($id);
        $destroy->delete();
        return redirect('/like');
    }
    public function show(Request $request)
    {
        $datas = Post::all();
        $id = $request->id;
        $data = Like::findOrFail($id);
        return view('Like.show', ['models' => $data,'datas' => $datas]);
    }
}
