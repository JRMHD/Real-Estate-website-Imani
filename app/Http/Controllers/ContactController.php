<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string',
            'terms' => 'accepted',
        ]);

        // Save to database
        $contact = Contact::create($request->all());

        // Send email
        Mail::to('nyamatufaith@gmail.com')->send(new ContactFormMail($contact));

        return response()->json(['message' => 'Form submitted successfully!']);
    }
}
