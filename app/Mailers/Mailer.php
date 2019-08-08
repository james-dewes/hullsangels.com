<?php

namespace App\Mailers;

use Illuminate\Support\Facades\Mail;

abstract class Mailer
{
    public function sendTo($address, $subject, $view, $data = [])
    {
        Mail::send($view, $data, function ($message) use ($address, $subject) {
            $message->to($address)
                    ->subject($subject);
        });
    }
}
