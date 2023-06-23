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

// blogs
Route::get('blog_single/{slug}/',[UserController::class, 'singleBlog']);
Route::get('cat_blog/{id}',[UserController::class, 'recentPost']);
Route::get('blogs/{slug}',[UserController::class, 'Blogs']);
Route::get('blogs',[UserController::class, 'Blogs']);
Route::post('search-blog',[UserController::class, 'Blogs']);


// courses
Route::get('courses',[UserController::class, 'Courses']);





Route::post('register', [UserController::class, 'register']);
Route::post('login', [UserController::class, 'login']);
Route::post('logout', [UserController::class, 'logout']);
Route::get('profile', [UserController::class, 'profile']);
Route::post('update-account', [UserController::class, 'updateAccount']);
Route::get('packages', [UserController::class, 'Packages']);




Route::view('about', 'user.about');
Route::view('payments', 'user.payments');
Route::view('careers', 'user.careers');
Route::view('downloads', 'user.downloads');
Route::view('contact', 'user.contact');



Route::group(['prefix' => 'admin', 'middleware' => 'check_user'], function () {

    Route::view('/dashboard', 'admin.index');



    // users
    Route::get('/users', [AdminController::class, 'userList'])->name('admin.users');
    Route::get('/delete-user/{id}',[AdminController::class,'deleteUser']);
    Route::get('/subscribe-package/{id}',[AdminController::class,'subscribePackage']);
    Route::post('/subscribe-package',[AdminController::class,'confirmPackage']);

    // subscriptions
    Route::get('/subscriptions',[AdminController::class,'Subscriptions']);




    // blogs
    Route::get('/blogs', [AdminController::class, 'blogList'])->name('admin.blogs');
    Route::get('/add-blog',[AdminController::class, 'addBlogPage']);
    Route::post('add-blog',[AdminController::class,'addBlog']);
    Route::get('updateblog/{id}',[AdminController::class,'showBlog']);
    Route::post('updateblog/{id}',[AdminController::class,'updateBlog']);
    Route::get('/deleteblog/{id}',[AdminController::class,'deleteBlog']);

    // courses
    Route::get('/courses', [AdminController::class, 'courseList'])->name('admin.courses');
    Route::view('/add-course', 'admin.courses.add_course');
    Route::post('add-course',[AdminController::class,'addCourse']);
    Route::get('updatecourse/{id}',[AdminController::class,'showCourse']);
    Route::post('update-course',[AdminController::class,'updateCourse']);
    Route::get('/deletecourse/{id}',[AdminController::class,'deleteCourse']);



    // blog categories
    Route::get('/categories', [AdminController::class, 'categoryList'])->name('admin.categories');
    Route::view('/add-category','admin.blogcategories.add_category');
    Route::post('add-category',[AdminController::class,'addCategory']);
    Route::get('/deletecategory/{id}',[AdminController::class,'deleteCategory']);
    Route::get('updatecategory/{id}',[AdminController::class,'showCategory']);
    Route::post('updatecategory/{id}',[AdminController::class,'updateCategory']);


    // Teachers
    Route::get('/teachers', [AdminController::class, 'teacherList']);
    Route::view('/add-teacher','admin.teachers.add_teacher');
    Route::post('add-teacher',[AdminController::class,'addTeacher']);
    Route::get('/delete-teacher/{id}',[AdminController::class,'deleteTeacher']);
    Route::get('update-teacher/{id}',[AdminController::class,'showTeacher']);
    Route::post('update-teacher',[AdminController::class,'updateTeacher']);

    // Packages
    Route::get('/packages', [AdminController::class, 'packageList']);
    Route::view('/add-package','admin.packages.add_package');
    Route::post('add-package',[AdminController::class,'addPackage']);
    Route::get('/delete-package/{id}',[AdminController::class,'deletePackage']);
    Route::get('update-package/{id}',[AdminController::class,'showPackage']);
    Route::post('update-package',[AdminController::class,'updatePackage']);
});
