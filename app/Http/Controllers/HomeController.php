<?php

namespace App\Http\Controllers;
use App\Models\FAQ;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Models\Blog;

class HomeController extends Controller
{
    public function index(){
        $faqs = Faq::all();
        $testimonials = Testimonial::all();
        $blogs = Blog::orderBy('created_at', 'desc')->take(3)->get(); 
        return view('front.index', compact('faqs', 'testimonials', 'blogs'));
    }
    
    public function about(){
       return view('front/about');
    }
     public function faq()
    {
        $faqs = FAQ::all(); // Fetch all FAQs from the database
        return view('front.faq', compact('faqs'));
    }
    public function privacyPolicy()
    {
        return view('front.privacy-policy');
    }
    public function terms()
    {
        return view('front.terms_and_conditions');
    }
    public function services()
    {
        return view('front.services');
    }
}
