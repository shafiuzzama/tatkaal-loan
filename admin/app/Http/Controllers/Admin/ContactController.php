<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\LoanApplication;
class ContactController extends Controller
{
    public function index()
    {
        $data['contactlist'] = Contact::all();
        return view('admin.contact.contactlist', $data);
    }
    
    
    public function customer()
    {
        $customers = LoanApplication::all();
        return view('admin.customer.list', compact('customers'));
    }

    public function view($id)
    {
        $data['contact'] = Contact::findOrFail($id);
        return view('admin.contact.contactview', $data);
    }

    public function save(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'heading' => 'required|string|max:255',
            'sub_heading' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'short_description' => 'nullable|string',
            'description' => 'nullable|string',
            'status' => 'required|boolean',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $contact = new Contact;
        $contact->heading = $request->heading;
        $contact->sub_heading = $request->sub_heading;
        $contact->name = $request->name;
        $contact->short_description = $request->short_description;
        $contact->description = $request->description;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = 'contact_' . time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/contact', $filename);
            $contact->image = $filename;
        }

        $contact->status = $request->status;
        $contact->save();

        return redirect()->back()->with('message', 'Contact Added Successfully');
    }

    public function list()
    {
        $data['contactlist'] = Contact::all();
        return view('admin.contact.contactlist', $data);
    }

    public function viewContact($id)
    {
        $data['contact'] = Contact::findOrFail($id);
        return view('admin.contact.contactview', $data);
    }

    // public function updateContact(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'heading' => 'required|string|max:255',
    //         'sub_heading' => 'required|string|max:255',
    //         'name' => 'required|string|max:255',
    //         'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //         'short_description' => 'nullable|string',
    //         'description' => 'nullable|string',
    //         'status' => 'required|boolean',
    //     ]);

    //     if ($validator->fails()) {
    //         return redirect()->back()->withErrors($validator);
    //     }

    //     $contact = Contact::findOrFail($request->id);
    //     $contact->heading = $request->heading;
    //     $contact->sub_heading = $request->sub_heading;
    //     $contact->name = $request->name;
    //     $contact->short_description = $request->short_description;
    //     $contact->description = $request->description;

    //     if ($request->hasFile('image')) {
    //         $file = $request->file('image');
    //         $filename = 'contact_' . time() . '.' . $file->getClientOriginalExtension();
    //         $file->storeAs('public/contact', $filename);

    //         // Delete the old image if exists
    //         if ($contact->image) {
    //             Storage::delete('public/contact/' . $contact->image);
    //         }

    //         $contact->image = $filename;
    //     }

    //     $contact->status = $request->status;
    //     $contact->save();

    //     return redirect()->route('admin.contact-list')->with('message', 'Contact Updated Successfully');
    // }

    // public function deleteContact($id)
    // {
    //     $contact = Contact::findOrFail($id);

    //     // Delete the image file if exists
    //     if ($contact->image) {
    //         Storage::delete('public/contact/' . $contact->image);
    //     }

    //     $contact->delete();

    //     return redirect()->route('admin.contact-list')->with('message', 'Contact Deleted Successfully');
    // }
}
