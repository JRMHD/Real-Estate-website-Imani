<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SubscriptionThankYouMail extends Mailable
{
    use SerializesModels;

    public function __construct()
    {
        // Any required data to send to the subscriber
    }

    public function build()
    {
        return $this->view('emails.subscription_thank_you')
            ->subject('Thank you for subscribing!');
    }
}
