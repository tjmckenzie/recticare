<?php

namespace App\Http\Controllers;
use App\Contact;
use App\Jobs\SendContactEmail;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\StoreContactRequest;

class ContactController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreContactRequest $request)
    {
        $contact = Contact::create($request->except('_token'));
        $contact->ip_address = $request->ip();
        $contact->save();

        $this->dispatch(new SendContactEmail($contact));

        return redirect('/contact')->with('success', 'Thank you! Your message has been sent.');
    }
}
