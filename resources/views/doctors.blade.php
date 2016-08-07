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
                <p>Fusce sed eleifend dolor.</p>
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
            <p>[Create form?]</p>
        </div>

        <div id="ordering" class="tab-content {{ ($section == 'ordering') ? 'current' : '' }}">
            <h1>Ordering Information</h1>
            <p><strong>For Healthcare Professionals Only: RectiCare can be ordered online through the Ferndale Healthcare website or by calling 1-888-548-0900 x234.</strong></p>
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
            <p>We welcome any questions, concerns or success stories you may have about RectiCare<sup>&reg;</sup>. Please fill out the form and click "Submit" to contact us via email.</p>
            <p>[ Form? ]</p>
            <p>You can also write to us at the following address or call: </p>

            <address>
                Ferndale Healthcare<sup>&reg;</sup><br />
                Inc. 780 W. Eight Mile Rd. <br />
                Ferndale, MI 48220<br />
                866.668.7482
            </address>
        </div>

    </div>
@endsection
