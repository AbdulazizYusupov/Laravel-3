<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::all();
        $datas = Post::all();
        return view('Comment.index',['models' => $comments,'datas' => $datas]);
    }
    public function create()
    {
        $datas = Post::all();
        return view('Comment.add',['models' => $datas]);
    }
    public function comment(Request $request)
    {
        $request->validate([
            'post_id' => 'required',
            'body' => 'required',

        ]);
        $comment = new Comment();
        $comment->post_id = $request->post_id;
        $comment->body = $request->body;
        $comment->save();
        return redirect('/comment');
    }
    public function destroy(Request $request)
    {
        // dd($request);
        $id = $request->id;
        $destroy = Comment::findOrFail($id);
        $destroy->delete();
        return redirect('/comment');
    }
    public function show(Request $request)
    {
        $datas = Post::all();
        $id = $request->id;
        $data = Comment::findOrFail($id);
        return view('Comment.show',['models' => $data,'datas' => $datas]);
    }
}
