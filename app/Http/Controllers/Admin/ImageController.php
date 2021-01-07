<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function create($post_id)
    {
        $data = Article::find($post_id);
        $images = DB::table('images')->where('post_id','=', $post_id)->get();
        return view('back.posts.image_add', ['data'=>$data, 'images'=>$images]);

    }

    public function store(Request $request, $post_id)
    {
        $post = new Image;
        $post->title=$request->input('text-input');
        $post->post_id=$post_id;

        if($request->hasFile('image')){
            $imageName=Str::slug($request->input('text-input')).'.'.$request->image->extension();
            $request->image->move(public_path('uploads'),$imageName);
            $post->image='uploads/'.$imageName;
        }
        $post->save();
        return redirect()->route('admin.admin_image_add', ['post_id'=>$post_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    public function destroy(Image $image, $id, $post_id)
    {
        $data = Image::find($id);
        $data->delete();
        return redirect()->route('admin.admin_image_add', ['post_id'=>$post_id]);
    }
}
