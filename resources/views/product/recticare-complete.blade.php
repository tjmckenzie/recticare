@extends('master')

@section('page_title', 'Recticare Anorectal Cream (30g)')
@section('page_id', 'product')

@section('content')
    <div class="hero">
        <div class="container padded">

            <div class="half">
                <h1>
                    RectiCare<sup>&reg;</sup> Complete
                    <span class="subhead">Hemorrhoid Care System</span>
                </h1>
                <img src="{{ url('images/product/RectiCare_Complete_Front.png') }}" class="feature" />
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
                    <h4 class="subhead">with RectiCare Advanced Hemorrhoidal Cream and RectiCare Advanced Hemorrhoidal Wipes</h4>
                    <p>This complete kit is designed to offer total care for your hemorrhoids, both at home or on-the-go. The advanced, dual action formulas – RectiCare Advanced Hemorrhoidal Cream and RectiCare Advanced Hemorrhoidal Wipes – relieve the discomfort of hemorrhoids while shrinking and protecting the swollen tissue.</p>
                    <ul class="bullet horizontal-nav">
                        <li>Shrinks swollen hemorrhoidal tissue</li>
                        <li>Relieves pain, itching and irritation</li>
                        <li>Dual action formulas soothe and protect</li>
                        <li>Highest percentage of lidocaine and phenylephrine HCl available over-the-counter</li>
                        <li>Includes 10 non-latex finger cots for hygienic application</li>
                        <li>Individually packaged wipes for convenience and portability</li>
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
                    <p>In one box, RectiCare<sup>&reg;</sup> Complete offers both Advanced Cream and Advanced Wipes together.</p>
                    <p>RectiCare<sup>&reg;</sup> Advanced Hemorrhoidal Cream contains the highest concentrations of lidocaine and phenylephrine HCl available without a prescription to reduce pain and irritation as well as swelling of hemorrhoids. White petrolatum and mineral oil act as protection for the inflamed tissue in between applications.</p>
                    <p>RectiCare<sup>&reg;</sup> Advanced Hemorrhoidal Wipes contain the highest concentrations of lidocaine and phenylephrine HCl available in a non-prescription wipe, to effectively relieve the discomfort of hemorrhoids and to help shrink the swollen tissue.</p>
                    <p>After you apply by gently patting the wipe to the clean, affected area, there will be a thin, protective coating of glycerin over the inflamed tissue to help prevent some further irritation.</p>
                </div>

                <div id="ingredients" class="tab-content {{ ($section == 'ingredients') ? 'current' : '' }}">
                    <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>

                <div id="faq" class="tab-content {{ ($section == 'faq') ? 'current' : '' }}">
                    <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>

            </div>

        </div>
    </div>

    @include('partials.product-symptom-chart')

@endsection
