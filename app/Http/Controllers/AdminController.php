<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use App\Models\Course;
use App\Models\Package;
use App\Models\Teacher;
use Illuminate\Support\Str;
use App\Models\BlogCategory;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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

    function addCourse(Request $req)
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

        $course =  new Course;
        $course->name = $req->input('title');
        $course->description = $req->input('description');
        $course->slug = Str::slug($req->input('slug'));
        $course->meta_title = $req->input('meta_title');
        $course->meta_description = $req->input('meta_description');
        $course->meta_keyword = $req->input('meta_keywords');


        if ($req->hasFile('image')) {
            $image = $req->file('image')->getClientOriginalName();
            $req->file('image')->storeAs('public/', $image);
            $course->image = $image;
        }
        $course->save();

        return redirect('/admin/courses/')->with('success', 'Course Added Successfully');
    }

    public function courseList(Request $req)
    {

        $data = DB::table("courses")
            ->select( 'id', 'name', 'slug', 'image')
            ->get();

        return view('admin.courses.index', compact('data'));
    }

    function deleteCourse($id)
    {
        $data = Course::find($id);
        $data->delete();

        return redirect()->back()->with('danger', 'Course Deleted Successfully');
    }

    function showCourse($id)
    {
        $data = Course::find($id);
        return view('admin.courses.update_course', ['data' => $data]);
    }

    function updateCourse(Request $req)
    {
        $course =  Course::find($req->id);
        $course->name = $req->input('title');
        $course->description = $req->input('description');
        $course->slug = Str::slug($req->input('slug'));
        $course->meta_title = $req->input('meta_title');
        $course->meta_description = $req->input('meta_description');
        $course->meta_keyword = $req->input('meta_keywords');

        if ($req->hasFile('image')) {
            $image = $req->file('image')->getClientOriginalName();

            $req->file('image')->storeAs('public/', $image);

            $course->image = $image;
        }

        $course->update();

        return redirect('/admin/courses')->with('success', 'Course Updated Successfully');
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




    function addTeacher(Request $request)
    {
    
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required',
                'phone' => 'required',
            ]
        );
    
        $teacher =  new Teacher;
        $teacher->name = $request->input('name');
        $teacher->email = $request->input('email');
        $teacher->phone = $request->input('phone');
        $teacher->address = $request->input('address');
        if ($request->hasFile('image')) {
            $image = $request->file('image')->getClientOriginalName();

            $request->file('image')->storeAs('public/', $image);

            $teacher->image = $image;
        }

        $teacher->save();
    
        return redirect('/admin/teachers/')->with('success', 'Teacher Added Successfully');
    }

    public function teacherList()
    {
       $teachers = Teacher::all();
       return view('admin.teachers.index', compact('teachers'));
    }

    function deleteTeacher($id)
    {
        $data = Teacher::find($id);
        $data->delete();

        return redirect()->back()->with('danger', 'Teacher Deleted Successfully');
    }

    function showTeacher($id)
    {
        $data = Teacher::find($id);

        return view('admin.teachers.update_teacher', ['data' => $data]);
    }

    function updateTeacher(Request $request)
    {
        $teacher =  Teacher::find($request->id);
        $teacher->name = $request->input('name');
        $teacher->email = $request->input('email');
        $teacher->phone = $request->input('phone');
        $teacher->address = $request->input('address');
        if ($request->hasFile('image')) {
            $image = $request->file('image')->getClientOriginalName();

            $request->file('image')->storeAs('public/', $image);

            $teacher->image = $image;
        }

        $teacher->save();

        return redirect('/admin/teachers')->with('success', 'Teacher Updated Successfully');
    }

    function addPackage(Request $req)
    {

        $req->validate(
            [
                'name' => 'required',
                'total_classes' => 'required',
                'price' => 'required',

            ]
        );

        $package =  new Package;
        $package->name = $req->input('name');
        $package->total_classes = $req->input('total_classes');
        $package->price = $req->input('price');



        $package->save();

        return redirect('/admin/packages/')->with('success', 'Package Added Successfully');
    }

    public function packageList()
    {
        $packages = Package::all();
        return view('admin.packages.index', compact('packages'));
    }

    function deletePackage($id)
    {
        $data = Package::find($id);
        $data->delete();

        return redirect()->back()->with('danger', 'Package Deleted Successfully');
    }

    function showPackage($id)
    {
        $data = Package::find($id);

        return view('admin.packages.update_package', ['data' => $data]);
    }

    function updatePackage(Request $req)
    {
        $package =  Package::find($req->id);
        $package->name = $req->input('name');
        $package->total_classes = $req->input('total_classes');
        $package->price = $req->input('price');
        $package->save();

        return redirect('/admin/packages')->with('success', 'Package Updated Successfully');
    }

    public function subscribePackage($id)
    {
        $data = DB::table('subscriptions')->where('user_id', $id)->select('status')->first();
        $user = DB::table('users')->where('id', $id)->select('id as user_id')->first();
        $packages = Package::all();
        return view('admin.users.subscribe_package', compact('data', 'packages', 'user'));
    }

    public function confirmPackage(Request $req)
    {

        // dd($id);
        $subscription = new Subscription;
        $subscription->plan_id = $req->input('plan_id');
        $subscription->subscription_date = $req->input('subscription_date');
        $subscription->status = $req->input('status');
        $subscription->user_id = $req->input('user_id');
        $subscription->save();

        return redirect('/admin/users')->with('success', 'Package Subscribed Successfully');
    }

    public function Subscriptions()
    {
        $data = DB::table("subscriptions")
            ->join('users', 'users.id', '=', 'subscriptions.user_id')
            ->join('packages', 'packages.id', '=', 'subscriptions.plan_id')
            ->select('subscriptions.*', 'users.name', 'users.email', 'users.phone', 'packages.name as package_name')
            ->get();

            return view('admin.users.subscriptions', compact('data'));
    }
}
