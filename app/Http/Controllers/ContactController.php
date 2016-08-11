<?php

namespace App\Http\Controllers;
use App\Contact;
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
        // dd($request->all());
        $contact = Contact::create($request->except('_token'));
        $contact->ip_address = $request->ip();
        $contact->save();
        dd($contact);
    }

    
}
