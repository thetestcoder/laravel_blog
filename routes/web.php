<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
#Route::get('admin/panel','App\Http\Controllers\Back\Dashboard@index')->name('admin.dashboard');

// Admin

Route::get('login', 'App\Http\Controllers\Admin\HomeController@login')->name('admin.auth.login');
Route::post('login', 'App\Http\Controllers\Admin\HomeController@login_post')->name('admin.auth.login.post');


Route::prefix('admin')->name('admin.')->middleware('Admin')->group(function (){
    Route::get('/', 'App\Http\Controllers\Admin\HomeController@index')->name('dashboard');
    Route::resource('posts', 'App\Http\Controllers\Admin\PostsController');
    Route::get('logout', 'App\Http\Controllers\Admin\HomeController@logout')->name('auth.logout');
    Route::get('register', 'App\Http\Controllers\Admin\HomeController@register')->name('auth.register');
    Route::get('forgetpassword', 'App\Http\Controllers\Admin\HomeController@forget')->name('auth.forget');

});

// User View
Route::get('/','App\Http\Controllers\Front\HomepageController@index')->name('homepage');
Route::get('page', 'App\Http\Controllers\Front\HomepageController@index');
Route::get('/category/{category}','App\Http\Controllers\Front\HomepageController@category')->name('category');
Route::get('/{category}/{slug}','App\Http\Controllers\Front\HomepageController@single')->name('single');
Route::get('/contact','App\Http\Controllers\Front\HomepageController@contact')->name('contact');
Route::post('/contact','App\Http\Controllers\Front\HomepageController@postcontact')->name('post.contact');
Route::get('/{sayfa}','App\Http\Controllers\Front\HomepageController@page')->name('page');


