<?php

namespace App\Http\Controllers;

use App\Mail\InquiryReceived;
use App\Models\Inquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class InquiryController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'inquiry_type' => 'required|string',
            'message' => 'required|string',
            'terms' => 'accepted',
        ]);

        // Store inquiry in the database
        $inquiry = Inquiry::create($request->only(['name', 'phone', 'email', 'inquiry_type', 'message']));

        // Send email
        Mail::to('nyamatufaith@gmail.com')->send(new InquiryReceived($inquiry));

        return response()->json(['message' => 'Your inquiry has been submitted successfully.'], 200);
    }
}
