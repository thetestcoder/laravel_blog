<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

// models

use App\Models\Article;
use App\Models\Category;


class HomepageController extends Controller
{
    public function index(){
        $data['articles']=Article::orderBy('created_at', 'DESC')->get();
        $data['categories'] = Category::inRandomOrder()->get();
        return view('front.homepage', $data);
    }

    public function single($category, $slug){;
        $article=Article::whereSlug($slug)->first() ?? abort(403, 'Böyle bir yazı bulunamadı');
        $article->increment('hit');

        $data['article']=$article;
        $data['categories']=Category::inRandomOrder()->get();
        return view('front.single',$data);
    }
}
