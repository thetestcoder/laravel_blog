<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\UserController;
use Illuminate\Foundation\Application;

use Inertia\Inertia;

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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});


// Admin

Route::get('admin/login', 'App\Http\Controllers\Admin\HomeController@login')->name('admin.auth.login');
Route::post('admin/login', 'App\Http\Controllers\Admin\HomeController@login_post')->name('admin.auth.login.post');


Route::prefix('admin')->name('admin.')->middleware('Admin')->group(function (){
    //user roles

    // posts
    Route::get('/', 'App\Http\Controllers\Admin\HomeController@index')->name('dashboard');
    Route::resource('posts', 'App\Http\Controllers\Admin\PostsController');
    Route::get('logout', 'App\Http\Controllers\Admin\HomeController@logout')->name('auth.logout');
    Route::get('register', 'App\Http\Controllers\Admin\HomeController@register')->name('auth.register');
    Route::get('forgetpassword', 'App\Http\Controllers\Admin\HomeController@forget')->name('auth.forget');
    Route::get('posts', 'App\Http\Controllers\Admin\PostsController@index')->name('posts.index');
    Route::get('switch','App\Http\Controllers\Admin\PostsController@switch')->name('switch');
    Route::put('hot_posts','App\Http\Controllers\Admin\PostsController@hot_posts')->name('hot_posts');
    Route::get('posts/create', 'App\Http\Controllers\Admin\PostsController@create')->name('posts.create');
    Route::get('create/{post_id}', 'App\Http\Controllers\Admin\ImageController@create')->name('admin_image_add');
    Route::post('store/{post_id}', 'App\Http\Controllers\Admin\ImageController@store')->name('admin_image_store');
    Route::get('delete/{id}/{post_id}', 'App\Http\Controllers\Admin\ImageController@destroy')->name('admin_image_delete');
    Route::get('show', 'App\Http\Controllers\Admin\ImageController@show')->name('admin_image_show');
    // Category
    Route::get('/categories', 'App\Http\Controllers\Admin\CategoryController@index')->name('category.index');
    Route::post('/categories/create', 'App\Http\Controllers\Admin\CategoryController@create')->name('category.create');
    Route::post('/categories/update','App\Http\Controllers\Admin\CategoryController@update')->name('category.update');
    Route::post('/categories/delete','App\Http\Controllers\Admin\CategoryController@delete')->name('category.delete');
    Route::post('/posts/delete/{id}','App\Http\Controllers\Admin\PostsController@delete')->name('posts.delete');
    Route::get('/categories/getData','App\Http\Controllers\Admin\CategoryController@getData')->name('category.getdata');
    // Page Route
    Route::get('/pages', 'App\Http\Controllers\Admin\PageController@index')->name('pages.index');
    Route::get('/pages/create', 'App\Http\Controllers\Admin\PageController@create')->name('pages.create');
    Route::post('/pages/create', 'App\Http\Controllers\Admin\PageController@createpost')->name('pages.create.post');
    Route::get('/pages/update/{id}','App\Http\Controllers\Admin\PageController@update')->name('pages.update');
    Route::post('/pages/update/{id}','App\Http\Controllers\Admin\PageController@updatepost')->name('pages.update.post');
    Route::get('/pages/switch','App\Http\Controllers\Admin\PageController@switch')->name('pages.switch');
    Route::post('/pages/delete/{id}','App\Http\Controllers\Admin\PageController@delete')->name('pages.delete');
    // Settings
    Route::get('/settings','App\Http\Controllers\Admin\SettingsController@index')->name('settings.index');
    Route::post('settings/update','App\Http\Controllers\Admin\SettingsController@update')->name('settings.update');

    // roles

    Route::get('/users', 'App\Http\Controllers\Admin\UserController@index')->name('users.index');
    Route::get('/users/create', 'App\Http\Controllers\Admin\UserController@create')->name('users.create');

    Route::post('/users/create', 'App\Http\Controllers\Admin\UserController@store')->name('users.store');
    Route::get('/users/{user}/edit', 'App\Http\Controllers\Admin\UserController@edit')->name('users.edit');
    Route::put('/users/{user}/update', 'App\Http\Controllers\Admin\UserController@update')->name('users.update');
    Route::delete('/users/{user}/delete', 'App\Http\Controllers\Admin\UserController@destroy')->name('users.destroy');

});
// User View
Route::middleware('Admin')->prefix('myuser')->name('myuser.')->group( function (){
    Route::get('/myprofile', [\App\Http\Controllers\Front\UserController::class, 'index'])->name('myprofile');
    Route::post('/', [\App\Http\Controllers\Front\UserController::class, 'login_post'])->name('myprofile.post');
    Route::patch('/myprofile', [\App\Http\Controllers\Front\UserController::class, 'update'])->name('myprofile.update');

});



// Frontend View
Route::get('/','App\Http\Controllers\Front\HomepageController@index')->name('homepage');
Route::get('page', 'App\Http\Controllers\Front\HomepageController@index');
Route::get('/category/{category}','App\Http\Controllers\Front\HomepageController@category')->name('category');
Route::get('/{category}/{slug}','App\Http\Controllers\Front\HomepageController@single')->name('single');
Route::get('/contact','App\Http\Controllers\Front\HomepageController@contact')->name('contact');
Route::post('/contact','App\Http\Controllers\Front\HomepageController@postcontact')->name('post.contact');
Route::get('/{sayfa}','App\Http\Controllers\Front\HomepageController@page')->name('page');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
