<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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


// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('register', 'user.register');
Route::view('login', 'user.login');
Route::get('/',[UserController::class, 'Welcome']);
// Route::view('blog_single', 'user.blog_single');
Route::get('blog_single/{slug}/',[UserController::class, 'singleBlog']);
Route::get('cat_blog/{id}',[UserController::class, 'recentPost']);
Route::get('blogs/{slug}',[UserController::class, 'Blogs']);
Route::get('blogs',[UserController::class, 'Blogs']);
Route::post('search-blog',[UserController::class, 'Blogs']);





Route::post('register', [UserController::class, 'register']);
Route::post('login', [UserController::class, 'login']);
Route::post('logout', [UserController::class, 'logout']);
Route::get('profile', [UserController::class, 'profile']);


Route::view('about', 'user.about');
Route::view('services', 'user.services');
Route::view('packages', 'user.packages');
Route::view('payments', 'user.payments');
Route::view('careers', 'user.careers');
Route::view('downloads', 'user.downloads');
Route::view('contact', 'user.contact');

Route::group(['prefix' => 'admin'], function () {

    Route::view('/dashboard', 'admin.index');
    Route::view('login', 'admin.login');
    Route::post('login', [AdminController::class, 'login']);


    // users
    Route::get('/users', [AdminController::class, 'userList'])->name('admin.users');
    Route::get('/delete-user/{id}',[AdminController::class,'deleteUser']);


    // blogs
    Route::get('/blogs', [AdminController::class, 'blogList'])->name('admin.blogs');
    Route::get('/add-blog',[AdminController::class, 'addBlogPage']);
    Route::post('add-blog',[AdminController::class,'addBlog']);
    Route::get('updateblog/{id}',[AdminController::class,'showBlog']);
    Route::post('updateblog/{id}',[AdminController::class,'updateBlog']);
    Route::get('/deleteblog/{id}',[AdminController::class,'deleteBlog']);


    // blog categories
    Route::get('/categories', [AdminController::class, 'categoryList'])->name('admin.categories');
    Route::view('/add-category','admin.blogcategories.add_category');
    Route::post('add-category',[AdminController::class,'addCategory']);
    Route::get('/deletecategory/{id}',[AdminController::class,'deleteCategory']);
    Route::get('updatecategory/{id}',[AdminController::class,'showCategory']);
    Route::post('updatecategory/{id}',[AdminController::class,'updateCategory']);


});
