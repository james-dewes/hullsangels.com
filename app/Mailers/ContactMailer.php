<?php

namespace App\Mailers;

class ContactMailer extends Mailer
{
    public function acknowledge($request)
    {
        $view = 'email.acknowledge';
        $data = ['name' => $request->name, 'messageBody' => $request->message];
        return $this->sendTo($request->email, $request->subject, $view, $data);
    }
}
