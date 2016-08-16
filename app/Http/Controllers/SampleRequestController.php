<?php

namespace App\Http\Controllers;
use App\SampleRequest;
use App\Jobs\SendSampleRequestEmail;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\StoreSampleRequest;

class SampleRequestController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSampleRequest $request)
    {
        // dd($request->all());
        $sample = SampleRequest::create($request->except('_token'));
        $sample->ip_address = $request->ip();
        $sample->save();

        $this->dispatch(new SendSampleRequestEmail($sample));

        return redirect('/doctors/request-samples')->with('success', 'Thank you!');
    }
}
