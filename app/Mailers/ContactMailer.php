<?php

namespace App\Mailers;

use App\Contact;

class ContactMailer extends Mailer
{
    /**
     * acknowledge
     *
     * @param  Request $request
     *
     * @return boolean;
     */
    public function acknowledge($request)
    {
        $view = 'email.acknowledge';
        $data = ['name' => $request->name, 'messageBody' => $request->message];
        return $this->sendTo($request->email, $request->subject, $view, $data);
    }

    public function notifyCommittee($request)
    {
        $view = 'email.notifyCommittee';
        $contact = Contact::all()->first();
        $data = ['name' =>$contact->name,
                 'from' => $request->name, 
                 'fromAddress' => $request->email,
                 'messageBody' => $request->message];
        
        return $this->sendTo( $contact->email, 'New message from Hullsangels.com re: ' . $request->subject, $view, $data);
    }
}
