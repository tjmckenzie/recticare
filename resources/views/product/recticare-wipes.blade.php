@extends('master')

@section('page_title', 'Recticare Anorectal Cream (30g)')
@section('page_id', 'product')
@section('canonical')
<link rel="canonical" href="{{ url('/product/recticare-wipes') }}" />
@endsection

@section('content')
    <div class="hero">
        <div class="container padded">

            <div class="half">
                <h1>RectiCare<sup>&reg;</sup> <span class="subhead">Medicated Anorectal Wipes</span></h1>
                <img src="{{ url('images/product/RectiCare_Wipes_Front.png') }}" class="feature" />
            </div>

            <div class="half">

                <ul class="tabs">
                    <li class="tabs-menu"><i class="fa fa-bars"></i></li>
                    <li class="tab-link {{ (is_null($section) OR $section == 'overview') ? 'current' : '' }}" data-tab="overview">Overview</li>
                    <li class="tab-link {{ ($section == 'how-it-works') ? 'current' : '' }}" data-tab="how-it-works">How It Works</li>
                    <li class="tab-link {{ ($section == 'ingredients') ? 'current' : '' }}" data-tab="ingredients">Ingredients</li>
                    <li class="tab-link {{ ($section == 'faq') ? 'current' : '' }}" data-tab="faq">FAQ</li>
                </ul>

                <div id="overview" class="tab-content {{ (is_null($section) OR $section == 'overview') ? 'current' : '' }}">
                    <p>RectiCare’s powerful active ingredient works to relieve discomfort quickly and effectively. The dual action, medicated wipes relieve pain, itching and discomfort and form a protective coating over inflamed tissues.</p>
                    <p>Individually wrapped, pre-moistened wipes provide fast-acting, soothing relief that goes with you.</p>
                    <ul class="bullet horizontal-nav">
                        <li>The highest lidocaine concentration available over-the-counter in a wipe</li>
                        <li>Dual action formula protects and soothes</li>
                        <li>12 individually packaged wipes</li>
                        <li>Discreet and portable</li>
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
                    <p>The individually packaged, pre-moistened wipes provide both relief from discomfort and protection from irritation. RectiCare® Wipes have the highest concentration of lidocaine available over-the-counter in a wipe, for rapid pain relief in a convenient, discreet package.</p>
                    <p>After tearing opening the package, apply the medication to the clean, affected area by patting gently. This will provide a thin, protective coating of glycerin over the inflamed tissue and help to prevent some further irritation.</p>
                    <p>In adults and children 12 and over, the wipes can be used up to 6 times a day, or after bowel movements.</p>
                </div>
                <div id="ingredients" class="tab-content {{ ($section == 'ingredients') ? 'current' : '' }}">
                    <p><strong>Active Ingredients:</strong> Lidocaine 4.3%, Glycerin 20%</p>
                    <p><strong>Inactive Ingredients:</strong> Citric Acid, Sodium Citrate, Potassium Sorbate, Phenoxyethanol, Purified Water</p>
                </div>
                <div id="faq" class="tab-content {{ ($section == 'faq') ? 'current' : '' }}">
                    Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </div>

            </div>

        </div>
    </div>

    @include('partials.product-symptom-chart')

@endsection
