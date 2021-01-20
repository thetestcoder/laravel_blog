<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;


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
        toastr()->success('Başarılı.', 'Post oluşturma işlemi başarıyla tamamlandı.');
        return redirect()->route('admin.posts.index');
    }

    public function multipleImageStore(Request $request): \Illuminate\Http\RedirectResponse
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

    public function edit($id){
        $post=Article::findOrFail($id);
        $categories=Category::all();
        return view('back.posts.edit', compact('categories', 'post'));
    }

    public function update(Request $request, $id)
    {
        $post = Article::findOrFail($id);
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

    public function switch(Request $request){
        $post=Article::findOrFail($request->id);
        $post->status=$request->status=="true" ? 1 : 0;
        $post->save();
    }

    public function delete($id){
        Article::find($id)->delete();
        toastr()->success('Başarılı, Gönderi başarıyla silindi.');
        return redirect()->route('admin.posts.index');
    }


}
