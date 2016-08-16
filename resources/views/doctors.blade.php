@extends('master')

@section('page_title', 'Doctor Resources')
@section('page_id', 'doctors')

@section('content')
    <div id="page-header">
        <div class="container padded">
            <div class="half">
                <h1>Doctor Resources</h1>
            </div>
            <div class="half">
                <p>See Why RectiCare<sup>&reg;</sup> Products Are Right for Your Patients</p>
            </div>
        </div>
    </div>

    <div class="container padded">

        <ul class="tabs">
            <li class="tabs-menu"><i class="fa fa-bars"></i></li>
            <li class="tab-link {{ (is_null($section) OR $section == 'request-samples') ? 'current' : '' }}" data-tab="request-samples">Request Samples</li>
            <li class="tab-link {{ ($section == 'ordering') ? 'current' : '' }}" data-tab="ordering">Ordering Information</li>
            <li class="tab-link {{ ($section == 'contact-us') ? 'current' : '' }}" data-tab="contact-us">Contact Us</li>
        </ul>

        <div id="request-samples" class="tab-content {{ (is_null($section) OR $section == 'request-samples') ? 'current' : '' }}">
            <h1>Request Samples</h1>
            <p>To request samples for your office, please complete the form below.</p>
            <em>For Medical Professionals Only</em>

            @if (session()->has('success'))
            <div class="msg success">
                <p>{{ session('success') }}</p>
            </div>
            @endif

            <form method="POST" action="{{ action('SampleRequestController@store') }}">
            {{ csrf_field() }}

            <div class="form-row">
                <div class="col half">
                    <div class="form-input {{ ($errors->has('name')) ? 'has-error'  :''}}">
                        <label for="name">Full Name: @if($errors->has('name')) <span class="error-msg">Required</span> @endif</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}">
                    </div>
                </div>

                <div class="col half">
                    <div class="form-input {{ ($errors->has('title')) ? 'has-error'  :''}}">
                        <label for="title">Title: @if($errors->has('title')) <span class="error-msg">Required</span> @endif</label>
                        <input type="text" name="title" id="title" value="{{ old('title') }}">
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col half">
                    <div class="form-input {{ ($errors->has('npi')) ? 'has-error'  :''}}">
                        <label for="npi">NPI: @if($errors->has('npi')) <span class="error-msg">Required</span> @endif</label>
                        <input type="text" name="npi" id="npi" value="{{ old('npi') }}">
                    </div>
                </div>

                <div class="col half">
                    <div class="form-input {{ ($errors->has('state_license_number')) ? 'has-error'  :''}}">
                        <label for="state_license_number">State License # @if($errors->has('state_license_number')) <span class="error-msg">Required</span> @endif</label>
                        <input type="text" name="state_license_number" id="state_license_number" value="{{ old('state_license_number') }}">
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col half">
                    <div class="form-input {{ ($errors->has('phone')) ? 'has-error'  :''}}">
                        <label for="phone">Phone: @if($errors->has('phone')) <span class="error-msg">Required</span> @endif</label>
                        <input type="text" name="phone" id="phone" value="{{ old('phone') }}">
                    </div>
                </div>

                <div class="col half">
                    <div class="form-input {{ ($errors->has('fax')) ? 'has-error'  :''}}">
                        <label for="fax">Fax: @if($errors->has('fax')) <span class="error-msg">Required</span> @endif</label>
                        <input type="text" name="fax" id="fax" value="{{ old('fax') }}">
                    </div>
                </div>
            </div>

            <div class="form-input {{ ($errors->has('practice_name')) ? 'has-error'  :''}}">
                <label for="practice_name">Practice Name: @if($errors->has('practice_name')) <span class="error-msg">Required</span> @endif</label>
                <input type="text" name="practice_name" id="practice_name" value="{{ old('practice_name') }}">
            </div>

            <div class="form-input {{ ($errors->has('address')) ? 'has-error'  :''}}">
                <label for="address">Address: @if($errors->has('address')) <span class="error-msg">Required</span> @endif</label>
                <input type="text" name="address" id="address" value="{{ old('address') }}">
            </div>

            <div class="form-row">
                <div class="col third">
                    <div class="form-input {{ ($errors->has('city')) ? 'has-error'  :''}}">
                        <label for="city">City: @if($errors->has('city')) <span class="error-msg">Required</span> @endif</label>
                        <input type="text" name="city" id="city" value="{{ old('city') }}">
                    </div>
                </div>
                <div class="col third">
                    <div class="form-input {{ ($errors->has('state')) ? 'has-error'  :''}}">
                        <label for="state">State: @if($errors->has('state')) <span class="error-msg">Required</span> @endif</label>
                        <input type="text" name="state" id="state" value="{{ old('state') }}">
                    </div>
                </div>
                <div class="col third">
                    <div class="form-input {{ ($errors->has('zipcode')) ? 'has-error'  :''}}">
                        <label for="zipcode">Zipcode: @if($errors->has('zipcode')) <span class="error-msg">Required</span> @endif</label>
                        <input type="text" name="zipcode" id="zipcode" value="{{ old('zipcode') }}">
                    </div>
                </div>
            </div>

            <div class="form-input {{ ($errors->has('subject')) ? 'has-error'  :''}}">
                <label for="subject">Subject: @if($errors->has('subject')) <span class="error-msg">Required</span> @endif</label>
                <input type="text" name="subject" id="practice_name" value="{{ old('subject') }}">
            </div>

            <div class="form-input {{ ($errors->has('message')) ? 'has-error'  :''}}">
                <label for="message">Message: @if($errors->has('message')) <span class="error-msg">Required</span> @endif</label>
                <textarea name="message" id="message">{{ old('message') }}</textarea>
            </div>

            <div class="form-row">
                <div class="col half">
                    <div class="form-input {{ ($errors->has('reference')) ? 'has-error'  :''}}">
                        <label for="reference">How Did You Hear About Us? @if($errors->has('reference')) <span class="error-msg">Required</span> @endif</label>
                        <select name="reference" id="reference">
                            <option value="TV" {{ (old("reference") == 'TV' ? "selected":"") }}>TV</option>
                            <option value="Patient" {{ (old("reference") == 'Patient' ? "selected":"") }}>Patient</option>
                            <option value="Medical Journal" {{ (old("reference") == 'Medical Journal' ? "selected":"") }}>Medical Journal</option>
                            <option value="Internet" {{ (old("reference") == 'Internet' ? "selected":"") }}>Internet</option>
                            <option value="Other" {{ (old("reference") == 'Other' ? "selected":"") }}>Other</option>
                        </select>
                    </div>
                </div>

                <div class="col half">
                    <div class="form-input {{ ($errors->has('reference_other')) ? 'has-error'  :''}}">
                        <label for="reference_other">If other, please specify. @if($errors->has('reference_other')) <span class="error-msg">{{ $errors->first('reference_other') }}</span> @endif</label>
                        <input type="text" name="reference_other" id="reference_other" value="{{ old('reference_other') }}">
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="right">
                    <input type="submit" value="Request Samples">
                </div>
            </div>

            </form>
        </div>

        <div id="ordering" class="tab-content {{ ($section == 'ordering') ? 'current' : '' }}">
            <h1>Ordering Information</h1>
            <p><strong>For Healthcare Professionals Only: RectiCare can be ordered online through the Ferndale Healthcare website <span class="nowrap">or by calling 1-888-548-0900 x234.</strong></span></p>
            <p>If you haven’t already created a login to the Physician Business Center, you may do so by following this link: <a href="http://ferndalehealthcare.com/login/" target="_blank">http://ferndalehealthcare.com/login/</a></p>
            <hr />
            <p>Please have the following information ready to provide:</p>
            <ul class="bullet">
                <li>Name</li>
                <li>Practice Name</li>
                <li>Address</li>
                <li>NPI Number</li>
                <li>TAX ID Number</li>
            </ul>
            <hr />
            <p>Please allow approximately 2 days for registration to be processed. Once you are a registered member you will have access to the Physician Business Center, which includes:</p>
            <ul class="bullet">
                <li>Easy on-line ordering</li>
                <li>Samples</li>
                <li>Patient Education Brochures</li>
            </ul>
        </div>

        <div id="contact-us" class="tab-content {{ ($section == 'contact-us') ? 'current' : '' }}">
            <h1>Contact Us</h1>
            <p>We welcome any questions, concerns or success stories you may have about RectiCare<sup>&reg;</sup>. To contact us via email, please use our <a href="{{ url('/contact') }}">contact page</a>.</p>
            <p>You can also call or write to us at the following address: </p>

            <address>
                Ferndale Healthcare<sup>&reg;</sup><br />
                Inc. 780 W. Eight Mile Rd. <br />
                Ferndale, MI 48220<br />
                866.668.7482
            </address>
        </div>

    </div>
@endsection
