<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    
    public function create()
    {
        return view('admin.about.create');
    }

    // Store a newly created resource in storage
    public function store(Request $request)
{
    $request->validate([
        'heading' => 'required|string|max:255',
        'sub_heading' => 'required|string|max:255',
        'name' => 'required|string|max:255',
        'our_history' => 'required',
        'our_mission' => 'required',
        'management' => 'required',
        'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        'status' => 'required|boolean',
    ]);

    $about = new About;
    $about->heading = $request->heading;
    $about->sub_heading = $request->sub_heading;
    $about->name = $request->name;
    $about->our_history = $request->our_history;
    $about->our_mission = $request->our_mission;
    $about->management = $request->management;
    $about->status = $request->status;

    if ($request->hasFile('image')) {
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('about'), $imageName);
        $about->image = $imageName;
    }

    $about->save();

    return redirect()->route('admin.about.index')->with('message', 'About section created successfully.');
}


    // Show the form for editing the specified resource
    public function edit($id)
    {
        $about = About::findOrFail($id);
        return view('admin.about.edit', compact('about'));
    }

    // Update the specified resource in storage
    public function update(Request $request, $id)
    {
        $request->validate([
            'heading' => 'required|string|max:255',
            'sub_heading' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'our_history' => 'required',
            'our_mission' => 'required',
            'management' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'status' => 'required|boolean',
        ]);
    
        $about = About::findOrFail($id);
        $about->heading = $request->heading;
        $about->sub_heading = $request->sub_heading;
        $about->name = $request->name;
        $about->our_history = $request->our_history;
        $about->our_mission = $request->our_mission;
        $about->management = $request->management;
        $about->status = $request->status;
    
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($about->image && file_exists(public_path('about/' . $about->image))) {
                unlink(public_path('about/' . $about->image));
            }
    
            // Save the new image
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('about'), $imageName);
            $about->image = $imageName;
        }
    
        $about->save();
    
        return redirect()->route('admin.about.index')->with('message', 'About section updated successfully.');
    }
    
    // Remove the specified resource from storage
    

    public function destroy($id)
{
    $about = About::findOrFail($id);
     $about->delete();

    return redirect()->route('admin.about.index')->with('message', 'About section deleted successfully.');
}


    // Display a listing of the resource
    public function index()
    {
        $abouts = About::all();
        return view('admin.about.index', compact('abouts'));
    }
}
