<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;

class ContactController extends Controller
{
    public function index(){
        return view('frontend.contact');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $contact = new ContactUs();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->address = $request->address;
        $contact->message = $request->message;
        $contact->save();

        return back()->with('success', "Thank you for contacting us. We will contact you soon.");
    }
}
