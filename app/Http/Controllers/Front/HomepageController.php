<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class HomepageController extends Controller
{
    public function index(){
        $data['categories'] = Category::inRandomOrder()->get();
        return view('front.homepage', $data);
    }
}
