<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function contact(){
        return view('front/contact-us');
     }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);
        
        Contact::create($validatedData);

        return redirect()->back()->with('success', 'Form submitted successfully! We will be Contact you Soon 😍 ! ');
    }
}
