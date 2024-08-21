<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('admin.testimonials.index', compact('testimonials'));
    }

    public function create()
    {
        return view('admin.testimonials.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'review' => 'required|string',
            'designition' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
         
        ]);
    
        $testimonial = new Testimonial;
        $testimonial->name = $request->name;
        $testimonial->review = $request->review;
        $testimonial->designition = $request->designition;
     
    
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('testimonials'), $imageName);
            $testimonial->image = $imageName;
        }
    
        $testimonial->save();
    
        return redirect()->route('admin.testimonials.index')->with('message', 'Testimonial created successfully.');
    }
    

    public function edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'review' => 'required|string',
            'designition' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
           
        ]);
    
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->name = $request->name;
        $testimonial->review = $request->review;
        $testimonial->designition = $request->designition;
      
    
        if ($request->hasFile('image')) {
            // Delete the old image if exists
            if ($testimonial->image && file_exists(public_path('testimonials/' . $testimonial->image))) {
                unlink(public_path('testimonials/' . $testimonial->image));
            }
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('testimonials'), $imageName);
            $testimonial->image = $imageName;
        }
    
        $testimonial->save();
    
        return redirect()->route('admin.testimonials.index')->with('message', 'Testimonial updated successfully.');
    }
    

    public function destroy($id)
    {
        $testimonial = Testimonial::findOrFail($id);
    
        // Optionally, delete the associated image if needed
        if ($testimonial->image && file_exists(public_path('testimonials/' . $testimonial->image))) {
            unlink(public_path('testimonials/' . $testimonial->image));
        }
    
        $testimonial->delete();
    
        return redirect()->route('admin.testimonials.index')->with('message', 'Testimonial deleted successfully.');
    }
    
}

