@extends('master')

@section('page_title', 'Recticare Anorectal Cream (30g)')
@section('page_id', 'product')
@section('canonical')
<link rel="canonical" href="{{ url('/product/recticare-cream') }}" />
@endsection

@section('content')
    <div class="hero">
        <div class="container">

            <div class="half">
                <h1>RectiCare<sup>&reg;</sup><span class="subhead">Anorectal Cream</span></h1>
                <img src="{{ url('images/product/RectiCare_Creams.png') }}" class="feature" />
            </div>

            <div class="half">

                <ul class="tabs">
                    <li class="tab-link {{ (is_null($section) OR $section == 'overview') ? 'current' : '' }}" data-tab="overview">Overview</li>
                    <li class="tab-link {{ ($section == 'how-it-works') ? 'current' : '' }}" data-tab="how-it-works">How It Works</li>
                    <li class="tab-link {{ ($section == 'ingredients') ? 'current' : '' }}" data-tab="ingredients">Ingredients</li>
                    <li class="tab-link {{ ($section == 'faq') ? 'current' : '' }}" data-tab="faq">FAQ</li>
                </ul>

                <div id="overview" class="tab-content {{ (is_null($section) OR $section == 'overview') ? 'current' : '' }}">
                    <p>For fast relief from pain, itching and burning associated with hemorrhoids and other anorectal disorders, use RectiCare<sup>&reg;</sup> Anorectal Cream.</p>
                    <p>RectiCare contains 5% lidocaine, a local anesthetic that provides fast relief from pain and discomfort. Physicians have trusted lidocaine for decades as a local anesthetic during minor surgeries.</p>
                    <ul class="bullet horizontal-nav">
                        <li>The highest lidocaine strength available over-the-counter</li>
                        <li>Provides rapid relief from pain, itching and burning</li>
                        <li>Includes 10 non-latex finger cots for hygienic application</li>
                        <li>Recommended by Colon &amp; Rectal Surgeons</li>
                        <li>Available in 15 g and 30 g tubes</li>
                    </ul>
                    <div class="retailers">
                        <h4 class="underline">Available At:</h4>
                        <img src="{{ url('images/retailers/cvs.png') }}" />
                        <img src="{{ url('images/retailers/walmart.png') }}" />
                        <img src="{{ url('images/retailers/riteaid.png') }}" />
                        <img src="{{ url('images/retailers/duanereade.png') }}" />
                        <img src="{{ url('images/retailers/drugstore.png') }}" />
                    </div>

                </div>
                <div id="how-it-works" class="tab-content {{ ($section == 'how-it-works') ? 'current' : '' }}">
                    <p>RectiCare<sup>&reg;</sup> Anorectal Cream utilizes lidocaine 5% to temporarily alleviate the pain, itching and burning from a number of anorectal conditions.</p>
                    <p>Using one of the finger cots included in the package, apply a small amount of the Cream to the affected area. The lidocaine acts as a local anesthetic so the discomfort you normally feel does not disrupt your day.</p>
                </div>
                <div id="ingredients" class="tab-content {{ ($section == 'ingredients') ? 'current' : '' }}">
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>
                <div id="faq" class="tab-content {{ ($section == 'faq') ? 'current' : '' }}">
                    Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </div>

            </div>

        </div>
    </div>

    @include('partials.product-symptom-chart')

@endsection
