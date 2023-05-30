<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class AdminController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        $user = User::where('email', $request->email)
            ->where('type', 1)
            ->first();
        // $type = $user->type;
        if (!$user || !Hash::check($request->password, $user->password)) {
            return redirect()->back()->with('error', 'Invalid Credentials');
        } else {
            session(['email' => $request->email]);
            // $email = session('email');
            // user::where('email', $email)->update(['last_login_at' => Carbon::now()]);
            return redirect('/admin')->with('success', 'Logged In Successfully');
        }
    }

    function userList(Request $req)
    {
        $search = $req['search'] ?? NULL;

        if ($search != NULL) {
            //where
            $users = User::where('name', 'LIKE', "%$search%")
                ->orwhere('email', 'LIKE', "%$search%")->get();
        } else {
            $users = User::all();
        }

        $data = compact('users', 'search');

        return view('admin.users.index')->with($data);
    }

    function deleteUser($id)
    {
        $data = User::find($id);
        $data->delete();

        return redirect()->back()->with('danger', 'User Deleted Successfully');
    }

    public function blogList(Request $req)
    {

        $data = DB::table("blogs")
            ->join('blogcategories', 'blogcategories.id', '=', 'blogs.category_id')
            ->select('blogs.*','blogcategories.id as cat_id', 'blogcategories.title')
            ->get();

        return view('admin.blogs.index', compact('data'));
    }

    public function addBlogPage()
    {
        $categories = BlogCategory::all();
        return view('admin.blogs.add_blog', compact('categories'));
    }

    function addBlog(Request $req)
    {

        // dd($req->all());

        // $req->validate(
        //     [
        //         'title' => 'required',
        //         'description' => 'required',
        //         'category_id' => 'required',
        //         'slug' => 'required',
        //         'meta_title' => 'required',
        //         'meta_description' => 'required',
        //         'meta_keywords' => 'required',
        //         'status' => 'required',
        //     ]
        // );

        $blog =  new Blog;
        $blog->name = $req->input('title');
        $blog->description = $req->input('description');
        $blog->category_id = $req->input('category');
        $blog->slug = Str::slug($req->input('slug'));
        $blog->meta_title = $req->input('meta_title');
        $blog->meta_description = $req->input('meta_description');
        $blog->meta_keyword = $req->input('meta_keywords');
        $blog->status = $req->input('status');


        if ($req->hasFile('image')) {
            $image = $req->file('image')->getClientOriginalName();

            $req->file('image')->storeAs('public/', $image);

            $blog->image = $image;
        }
        $blog->save();

        return redirect('/admin/blogs/')->with('success', 'Blog Added Successfully');
    }

    function showBlog($id)
    {
        // dd($id);
        $data = Blog::find($id);
        // $data = DB::table("blogs")
        //     ->join('blogcategories', 'blogcategories.id', '=', 'blogs.category_id')
        //     ->select('blogs.id as blog_id', 'blogs.title as blog_title', 'blogs.description', 'blogs.tags', 'blogs.image', 'blogcategories.id', 'blogcategories.title as category_title')
        //     ->where('blogs.id', '=', $id)
        //     ->get();
        // dd($data);

        return view('admin.blogs.update_blog', ['data' => $data]);
    }

    function updateBlog(Request $req)
    {
        $blog =  Blog::find($req->id);
        $blog->name = $req->input('title');
        $blog->description = $req->input('description');
        $blog->slug = Str::slug($req->input('slug'));
        $blog->meta_title = $req->input('meta_title');
        $blog->meta_description = $req->input('meta_description');
        $blog->meta_keyword = $req->input('meta_keywords');
        $blog->status = $req->input('status');

        if ($req->hasFile('image')) {
            $image = $req->file('image')->getClientOriginalName();

            $req->file('image')->storeAs('public/', $image);

            $blog->image = $image;
        }

        $blog->update();

        return redirect('/admin/blogs')->with('success', 'Blog Updated Successfully');
    }

    function deleteBlog($id)
    {
        $data = Blog::find($id);
        $data->delete();

        return redirect()->back()->with('danger', 'Blog Deleted Successfully');
    }

    function addCategory(Request $req)
    {

        $req->validate(
            [
                'title' => 'required',
                'slug' => 'required',
            ]
        );

        $category =  new BlogCategory;
        $category->title = $req->input('title');
        $category->slug = Str::slug($req->input('slug'));

        $category->save();

        return redirect('/admin/categories/')->with('success', 'Category Added Successfully');
    }

    public function categoryList(Request $req)
    {
        $search = $req['search'] ?? NULL;

        if ($search != NULL) {
            //where
            $categories = BlogCategory::where('title', 'like', '%' . $search . '%')->get();
        } else {
            $categories = BlogCategory::all();
        }

        $data = compact('categories', 'search');

        return view('admin.blogcategories.index')->with($data);
    }

    function deleteCategory($id)
    {
        $data = BlogCategory::find($id);
        $data->delete();

        return redirect()->back()->with('danger', 'Category Deleted Successfully');
    }

    function showCategory($id)
    {
        $data = BlogCategory::find($id);

        return view('admin.blogcategories.update_category', ['data' => $data]);
    }

    function updateCategory(Request $req)
    {
        $category =  BlogCategory::find($req->id);
        $category->title = $req->input('title');
        $category->slug = Str::slug($req->input('slug'));
        $category->save();

        return redirect('/admin/categories')->with('success', 'Category Updated Successfully');
    }
}
