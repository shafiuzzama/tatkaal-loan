<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Blog;
class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::paginate(10); // Change the number to however many items you want per page
        return view('front.blogs', compact('blogs'));
    }

    // Method to show blog details
    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        $latestBlogs = Blog::orderBy('created_at', 'desc')->take(3)->get(); // Adjust the number of latest blogs if needed

        return view('front.blog-details', compact('blog' , 'latestBlogs'));
    }

} 
