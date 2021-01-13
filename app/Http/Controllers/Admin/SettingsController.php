<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Hamcrest\Core\Set;
use Illuminate\Http\Request;
use App\Models\Settings;
use Illuminate\Support\Str;

class SettingsController extends Controller
{
    public function index(){
        $setting=Settings::find(1);
        return view('back.settings.index', compact('setting'));
    }

    public function update(Request $request){
        $setting=Settings::find(1);
        $setting->title=$request->title;
        $setting->status=1;
        $setting->twitter=$request->twitter;
        $setting->github=$request->github;
        $setting->linkedin=$request->linkedin;
        $setting->medium=$request->medium;
        $setting->colab=$request->colab;

        if($request->hasFile('logo')){
            $logo=Str::slug($request->title).'-logo.'.$request->logo->getClientOriginalExtension();
            $request->logo->move(public_path('uploads'),$logo);
            $setting->logo='uploads/'.$logo;
        }
        if($request->hasFile('favicon')){
            $favicon=Str::slug($request->title).'-logo.'.$request->logo->getClientOriginalExtension();
            $request->favicon->move(public_path('uploads'),$favicon);
            $setting->favicon='uploads/'.$favicon;
        }
        $setting->save();
        toastr()->success('Ayarlar başarıyla güncellendi');
        return redirect()->back();
    }
}
