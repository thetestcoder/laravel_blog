<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class PostsController extends Controller
{
    //
    public function show($id){
        return $id;
    }

    //
    public function index(){
        $posts = Article::orderBy('created_at', 'ASC')->get();
        return view('back.posts.index', compact('posts'));
    }
}
