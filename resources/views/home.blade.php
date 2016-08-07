@extends('master')

@section('page_title', 'Recticare')
@section('page_id', 'home')

@section('content')

    <div id="homepage-banner-background">
        <div id="homepage-banner-elements" class="container">
            <img src="{{ url('images/home-banner-elements.png') }}" />
        </div>
    </div>

    <div id="products-cta" class="container">
        <a href="{{ url('/products') }}" class="btn jumbo shadow">Our Products</a>
    </div>

    <div id="featured-list" class="container padded">
        <div class=" product">
            <a href="{{ url('/product/recticare-cream') }}">
                <img src="{{ url('images/product/RectiCare_Cream_Front.png') }}" />
                <p><strong>RectiCare Anorectal Cream</strong> <sup>(30g)</sup></p>
            </a>
        </div>
        <div class=" product">
            <a href="{{ url('/product/recticare-complete') }}">
                <img src="{{ url('images/product/RectiCare_Complete_Front.png') }}" />
                <p><strong>RectiCare Complete</strong></p>
            </a>
        </div>
        <div class=" product">
            <a href="{{ url('/product/recticare-cream') }}">
                <img src="{{ url('images/product/RectiCare_CreamVert_Front.png') }}" />
                <p><strong>RectiCare Anorectal Cream</strong> <sup>(15g)</sup></p>
            </a>
        </div>
        <div class=" product">
            <a href="{{ url('/product/recticare-wipes') }}">
                <img src="{{ url('images/product/RectiCare_Wipes_Front.png') }}" />
                <p><strong>RectiCare Wipes</strong></p>
            </a>
        </div>
    </div>

    @include('partials.product-symptom-chart')

@endsection
