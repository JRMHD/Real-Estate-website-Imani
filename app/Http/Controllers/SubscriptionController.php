<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SubscriptionThankYouMail;
use App\Mail\SubscriptionAlertMail;

class SubscriptionController extends Controller
{
    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:subscriptions,email',
        ]);

        // Store the email in the subscriptions table
        $subscription = Subscription::create([
            'email' => $request->email,
        ]);

        // Send thank-you email to the subscriber
        Mail::to($request->email)->send(new SubscriptionThankYouMail());

        // Send alert email to the website owner
        Mail::to('nyamatufaith@gmail.com')->send(new SubscriptionAlertMail($subscription));

        return response()->json(['message' => 'Thank you for subscribing!']);
    }
}
