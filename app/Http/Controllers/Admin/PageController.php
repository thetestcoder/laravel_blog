<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Models\Page;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function index(){
        $pages=Page::all();
        return view('back.pages.index', compact('pages'));
    }

    public function create(){
        return view('back.pages.create');
    }

    public function createpage(Request $request){
        $request->validate([
            'title'=>'min:3',
            'image'=>'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $last=Page::latest()->first();

        $page = new Page;
        $page->title=$request->input('text-input');
        $page->hakkimda=$request->input('content');
        $page->order=$last->order+1;
        $page->slug=Str::slug($request->input('text-input'));

        if($request->hasFile('image')){
            $imageName=Str::slug($request->input('text-input')).'.'.$request->image->extension();
            $request->image->move(public_path('uploads'),$imageName);
            $page->image='uploads/'.$imageName;
        }


        $page->save();
        toastr()->success('Başarılı.', 'Sayfa oluşturma işlemi başarıyla tamamlandı.');
        return redirect()->route('admin.pages.index');
    }

    public function update($id){
        $page = Page::findOrFail($id);
        return view('back.pages.edit', compact('page'));
    }

    public function updatepost(Request $request, $id)
    {
        $page = Page::findOrFail($id);
        $page->title=$request->input('text-input');
        $page->hakkimda=$request->input('content');
        $page->slug=Str::slug($request->input('text-input'));

        if($request->hasFile('image')){
            $imageName=Str::slug($request->input('text-input')).'.'.$request->image->extension();
            $request->image->move(public_path('uploads'),$imageName);
            $page->image='uploads/'.$imageName;
        }

        $page->save();
        toastr()->success('Başarılı', 'Sayfa başarılı bir şekilde güncelllendi.');
        return redirect()->route('admin.pages.index');
    }

    public function delete($id){
        Page::find($id)->delete();
        toastr()->success('Başarılı, Sayfa başarıyla silindi.');
        return redirect()->route('admin.pages.index');
    }


    public function switch(Request $request){
        $page=Page::findOrFail($request->id);
        $page->status=$request->status == "true" ? 1 : 0;
        $page->save();
    }
}
