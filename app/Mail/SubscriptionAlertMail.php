<?php

namespace App\Mail;

use App\Models\Subscription;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SubscriptionAlertMail extends Mailable
{
    use SerializesModels;

    public $subscription;

    public function __construct(Subscription $subscription)
    {
        $this->subscription = $subscription;
    }

    public function build()
    {
        return $this->view('emails.subscription_alert')
            ->with(['subscription' => $this->subscription])
            ->subject('New Subscription Alert');
    }
}
