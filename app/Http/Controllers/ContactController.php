<?php

namespace App\Http\Controllers;

use App\Contact;
use App\ContactOption;
use Illuminate\Http\Request;
use App\Mailers\ContactMailer;

class ContactController extends Controller
{
    protected $mailer;

    public function __construct(ContactMailer $mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjects = ContactOption::pluck('subject');
        return view('contact.index', compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|exists:contact_options,subject',
            'message' => 'required|string',
            'terms' => 'required|accepted',
            'g-recaptcha-response' => 'required'

        ]);
        //validate the Recapatcha
        //Post params
        $data = [
            'secret' => env('CAPTCHA__VERIFICATION_KEY'),
            'response' => $request->g-recaptcha-response
        ];
        $client = new \GuzzleHttp\Client();
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $request = $client->post($url,  ['body'=>$data]);
        $response = $request->send();
      
        dd($response);
        Post::make($data)->resolve();
        
        $subjects = ContactOption::pluck('subject');
        $this->mailer->acknowledge($request);
        $this->mailer->notifyCommittee($request);

        return view('contact.index', compact('subjects'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
