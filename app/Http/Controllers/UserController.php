<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use App\Models\Package;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function Welcome()
    {
        $blogs = DB::table("blogs")
        ->join('blogcategories', 'blogcategories.id', '=', 'blogs.category_id')
        ->select('blogs.id as blog_id', 'blogs.name', 'blogs.description', 'blogs.image', 'blogs.slug', 'blogcategories.id as cat_id', 'blogcategories.title')
        ->get();
        return view('welcome', compact('blogs'));
    }

    // Blogs

    public function Blogs($slug = null , Request $req)
    {

        // dd($req->all());

        if($req->search !== null)
        {
            $blogs = DB::table("blogs")
                ->join('blogcategories', 'blogcategories.id', '=', 'blogs.category_id')
                ->select('blogs.id as blog_id', 'blogs.name', 'blogs.description', 'blogs.image', 'blogs.slug', 'blogcategories.id as cat_id', 'blogcategories.title', 'blogcategories.slug')
                ->where('blogs.name', 'like', '%'. $req->search. '%' )
                ->get();
        }

        elseif ($slug !== null) {
            $blogs = DB::table("blogs")
                ->join('blogcategories', 'blogcategories.id', '=', 'blogs.category_id')
                ->select('blogs.id as blog_id', 'blogs.name', 'blogs.description', 'blogs.image', 'blogs.slug', 'blogcategories.id as cat_id', 'blogcategories.title', 'blogcategories.slug')
                ->where('blogcategories.slug', '=', $slug )
                ->get();
        }
        else
        {
            $blogs = DB::table("blogs")
            ->join('blogcategories', 'blogcategories.id', '=', 'blogs.category_id')
            ->select('blogs.id as blog_id', 'blogs.name', 'blogs.description', 'blogs.image', 'blogs.slug', 'blogcategories.id as cat_id', 'blogcategories.title')
            ->get();
        }

        return view('user.blogs', compact('blogs'));
    }

    public function singleBlog($slug)
    {
        // $check = $category_id ?? NULL;


        $blog = DB::table('blogs')
            ->select(DB::raw('*, DATE(created_at) as created_at_date'))
            ->where('slug', $slug)->first();

        // $category = DB::table('blogcategories')->where('id', $cat_id)->first();

        $categories = BlogCategory::all();

        $blogtitles = DB::table('blogs')->select('name', 'slug')->latest()->take(2)->get();

        return view('user.blog_single', compact('blog', 'categories', 'blogtitles'));
    }

    public function recentPost($id)
    {
        $data = DB::table("blogs")
            ->join('blogcategories', 'blogcategories.id', '=', 'blogs.category_id')
            ->select('blogs.id as blog_id', 'blogs.title as blog_title', 'blogs.description', 'blogs.tags', 'blogs.image', 'blogcategories.id', 'blogcategories.title as category_title')
            ->where('blogs.id', $id)
            ->get();

        // dd($data);
    }

    // Courses
    public function Courses($slug = null , Request $req)
    {

        // dd($req->all());

        if($req->search !== null)
        {
            $courses = DB::table("courses")
                ->select('name', 'slug', 'image' )
                ->where('name', 'like', '%'. $req->search. '%' )
                ->get();
        }

        elseif ($slug !== null) {
            $courses = DB::table("courses")
                ->select('name', 'slug', 'image' )
                ->where('slug', '=', $slug )
                ->get();
        }
        else
        {
            $courses = DB::table("courses")
                ->select('name', 'slug', 'image' )
                ->get();
        }

        return view('user.courses', compact('courses'));
    }

    public function profile()
    {
        $id = session()->get('user_id');
        $data = User::where('id',$id)->first();
        return view('user/profile' , compact('data'));
    }

    public function updateAccount(Request $request)
    {
        $id = session()->get('user_id');
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        if ($request->hasFile('image')) {
            $image = $request->file('image')->getClientOriginalName();

            $request->file('image')->storeAs('public/', $image);

            $user->image = $image;
        }
        $user->save();
        return redirect()->back();
    }

    public function Packages()
    {
        $packages = Package::all();
        return view('user.packages', compact('packages'));
    }


    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:20',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|',

        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password =  Hash::make($request->password);
        $user->save();
        return redirect('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        $user = User::where('email', $request->email)->first();
        if (!$user || !Hash::check($request->password, $user->password)) {
            return redirect()->back()->with('error', 'Invalid Credentials');
        } else {
            session(
                [
                    'user_id' => $user->id,
                    'email' => $request->email
                ]
            );
            // $email = session('email');
            // user::where('email', $email)->update(['last_login_at' => Carbon::now()]);
            return redirect('/')->with('success', 'Logged In Successfully');
        }
    }

    public function logout()
    {
        session()->flush();
        return redirect('/');
    }
}
