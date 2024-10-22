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
        return view('like',['models' => $likes,'datas' => $datas]);
    }
}
