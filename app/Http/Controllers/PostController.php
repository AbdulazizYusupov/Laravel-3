<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $category = Category::all();
        return view('Post.index', ['models' => $posts, 'datas' => $category]);
    }
    public function create()
    {
        $category = Category::all();
        return view('Post.add',['models' => $category]);
    }
    public function post(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'title' => 'required',
            'body' => 'required',
            'likes' => 'required',
            'dislikes' => 'required',

        ]);
        $post = new Post();
        $post->category_id = $request->category_id;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->likes = $request->likes;
        $post->dislikes = $request->dislikes;
        $post->save();
        return redirect('/post');
    }
    public function destroy(Request $request)
    {
        // dd($request);
        $id = $request->id;
        $destroy = Post::findOrFail($id);
        $destroy->delete();
        return redirect('/post');
    }
    public function show(Request $request)
    {
        $datas = Category::all();
        $id = $request->id;
        $data = Post::findOrFail($id);
        return view('Post.show',['models' => $data,'datas' => $datas]);
    }
}
