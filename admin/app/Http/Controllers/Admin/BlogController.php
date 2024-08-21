<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    public function index()
    {
        return view('admin.blog.blog');
    }

    public function blog_save(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'heading' => 'required',
            'sub_heading' => 'required',
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $blog = new Blog;
        $blog->heading = $request->heading;
        $blog->sub_heading = $request->sub_heading;
        $blog->name = $request->name;
        $blog->short_description = $request->short_description;
        $blog->description = $request->description;

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('blog/', $filename);
            $blog->image = $filename;
        }

        $blog->status = $request->status;
        $blog->save();

        return redirect('admin/blog-list')->with('message', 'Added Blog Successfully');
    }

    public function bloglist()
    {
        $data["bloglist"] = Blog::all();
        return view('admin.blog.bloglist', $data);
    }

    public function editBlog($id)
    {
        $data["blog"] = Blog::find($id);
        return view('admin.blog.blogedit', $data);
    }

    public function updateBlog(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'heading' => 'required',
            'sub_heading' => 'required',
            'name' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg' // Image not required during update
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $updateid = $request->id;
        $blog = Blog::find($updateid);

        $blog->heading = $request->heading;
        $blog->sub_heading = $request->sub_heading;
        $blog->name = $request->name;
        $blog->short_description = $request->short_description;
        $blog->description = $request->description;

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($blog->image && file_exists(public_path('blog/') . $blog->image)) {
                unlink(public_path('blog/') . $blog->image);
            }

            $file = $request->file('image');
            $img_ext = $file->getClientOriginalExtension();
            $filename = 'blog-' . time() . '.' . $img_ext;
            $file->move('blog/', $filename);
            $blog->image = $filename;
        }

        $blog->status = $request->status;
        $blog->save();

        return redirect('admin/blog-list')->with('message', 'Blog Updated Successfully');
    }

    public function deleteBlog($id)
    {
        $blog = Blog::find($id);
        if ($blog->image && file_exists(public_path('blog/') . $blog->image)) {
            unlink(public_path('blog/') . $blog->image);
        }
        $blog->delete();
        return redirect('admin/blog-list')->with('message', 'Blog Deleted Successfully');
    }

    public function getData(Request $request)
    {
        $userData = User::selectRaw('MONTH(created_at) as month, COUNT(*) as user_count')
                        ->groupBy('month')
                        ->get();

        $responseData = [
            'month' => $userData->pluck('month')->toArray(),
            'user_count' => $userData->pluck('user_count')->toArray(),
        ];

        return response()->json(['data' => $responseData]);
    }
    
}
