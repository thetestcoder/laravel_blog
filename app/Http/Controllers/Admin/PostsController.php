<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\Article;
use App\Models\Category;

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

    public function create(){
        $categories = Category::all();
        return view('back.posts.create',compact('categories'));
    }

    public function store(Request $request){
        $post = new Article;
        $post->title=$request->input('text-input');
        $post->category_id=$request->input('selectLg');
        $post->content=$request->input('content');
        $post->slug=Str::slug($request->input('text-input'));

        if($request->hasFile('image')){
            $imageName=Str::slug($request->input('text-input')).'.'.$request->image->extension();
            $request->image->move(public_path('uploads'),$imageName);
            $post->image='uploads/'.$imageName;
        }


        $post->save();
        return redirect()->route('admin.posts.index');
    }

    public function multipleImageStore(Request $request)
    {

        foreach($request->file('file') as $image)
        {
            $imageName=$image->getClientOriginalName();
            $image->move(public_path().'/images/', $imageName);
            $fileNames[] = $imageName;

        }

        $images = json_encode($fileNames);

        // Store $images image in DATABASE from HERE
        Image::create(['images' => $images]);
        return back()
            ->with('success','You have successfully file uplaod.')
            ->with('files',$fileNames);
    }
}
