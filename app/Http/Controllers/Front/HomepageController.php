<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

// models


use Illuminate\Support\Str;
use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\DB;

use App\Models\Article;
use App\Models\Category;
use App\Models\Page;
use App\Models\Contact;
use App\Models\Image;


class HomepageController extends Controller
{

    public function __construct(){
        view()->share('pages', Page::orderBy('order', 'ASC')->get());
        view()->share('categories', Category::inRandomOrder()->get());
    }
    public function index(){
        $data['articles']=Article::orderBy('created_at', 'DESC')->paginate(10);
        $data['articles']->withPath(url('page'));
        return view('front.homepage', $data);
    }

    public function single($category, $slug){;
        $category = Category::whereSlug($category)->first() ?? abort(403, 'Bu isimde bir kategori bulunamadı.');
        $article=Article::whereSlug($slug)->first() ?? abort(403, 'Böyle bir yazı bulunamadı');
        $article->increment('hit');
        $data['article']=$article;
        $data['categories']=Category::inRandomOrder()->get();
        $data['images']=Image::inRandomOrder()->get();

        return view('front.single',$data);
    }

    public function category($slug){
        $category = Category::whereSlug($slug)->first() ?? abort(403, 'Bu isimde bir kategori bulunamadı.');
        $data['category']=$category;
        $data['articles']=Article::where('category_id', $category->id)->orderBy('created_at', 'DESC')->paginate(1);
        $data['categories'] = Category::inRandomOrder()->get();

        return view('front.category', $data);
    }

    public function page($slug){
        $page=Page::whereSlug($slug)->first() ?? abort(403, 'Böyle bir sayfa bulunamadı.');
        $data['page']=$page;
        $data['pages']=Page::orderBy('order','ASC')->get();
        return view('front.info-page', $data);
    }

    public function contact(){
        return view('front.contact');
    }

    public function postcontact(Request $request){

        $this->validate($request, [
            'name'=>'required',
            'email'=>'required',
            'message'=>'required'
        ]);


        $contact = new Contact;
        $contact->name=$request->name;
        $contact->email=$request->email;
        $contact->message=$request->message;
        $contact->save();

        return redirect()->route('contact')->with('success','cong');

    }

}
