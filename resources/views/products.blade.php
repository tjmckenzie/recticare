@extends('master')

@section('page_title', 'Recticare')
@section('page_id', 'products')

@section('content')

    <div id="products-banner-background">
        <div id="products-banner-elements" class="container">
            <img src="{{ url('images/products-banner-elements.png') }}" />
        </div>
        <div id="banner-text">
            <h1>RectiCare Products</h1>
            <p>Recommended by Colon &amp; Rectal Surgeons</p>
        </div>
    </div>

    <div class="gradient-background">

        <div id="product-list" class="container padded">

            <div class="product left">
                <div class="half image">
                    <img src="{{ url('images/product/RectiCare_Cream_Front.png') }}" />
                </div>
                <div class="half desc">
                    <h1>RectiCare Anorectal Cream <sup>(30g)</sup></h1>
                    <ul class="bullet">
                        <li>The highest lidocaine strength available over-the-counter</li>
                        <li>Provides rapid relief from pain, itching and burning</li>
                        <li>Includes 10 non-latex finger cots for hygienic application</li>
                        <li>Recommended by Colon &amp; Rectal Surgeons</li>
                        <li>Available in 15 g and 30 g tubes</li>
                    </ul>
                    <a href="{{ url('/product/recticare-cream') }}" class="btn primary shadow">Learn More</a>
                </div>
            </div>

            <div class="product right">
                <div class="half desc">
                    <h1>RectiCare Complete</h1>
                    <ul class="bullet">
                        <li>Shrinks swollen hemorrhoidal tissue</li>
                        <li>Relieves pain, itching and irritation</li>
                        <li>Dual action formulas soothe and protect</li>
                        <li>Highest percentage of lidocaine and phenylephrine HCl available over-the-counter</li>
                        <li>Includes 10 non-latex finger cots for hygienic application</li>
                        <li>Individually packaged wipes for convenience and portability</li>
                    </ul>
                    <a href="{{ url('/product/recticare-complete') }}" class="btn primary shadow">Learn More</a>
                </div>
                <div class="half image">
                    <img src="{{ url('images/product/RectiCare_Complete_Front.png') }}" />
                </div>
            </div>

            <div class="product left">
                <div class="half image">
                    <img src="{{ url('images/product/RectiCare_CreamVert_Front.png') }}" />
                </div>
                <div class="half desc">
                    <h1>RectiCare Anorectal Cream <sup>(15g)</sup></h1>
                    <ul class="bullet">
                        <li>The highest lidocaine strength available over-the-counter</li>
                        <li>Provides rapid relief from pain, itching and burning</li>
                        <li>Includes 10 non-latex finger cots for hygienic application</li>
                        <li>Recommended by Colon &amp; Rectal Surgeons</li>
                        <li>Available in 15 g and 30 g tubes</li>
                    </ul>
                    <a href="{{ url('/product/recticare-cream') }}" class="btn primary shadow">Learn More</a>
                </div>
            </div>

            <div class="product right">
                <div class="half desc">
                    <h1>RectiCare Wipes</h1>
                    <ul class="bullet">
                        <li>The highest lidocaine concentration available over-the-counter in a wipe</li>
                        <li>Dual action formula protects and soothes</li>
                        <li>12 individually packaged wipes</li>
                        <li>Discreet and portable</li>
                    </ul>
                    <a href="{{ url('/product/recticare-wipes') }}" class="btn primary shadow">Learn More</a>
                </div>
                <div class="half image">
                    <img src="{{ url('images/product/RectiCare_Wipes_Front.png') }}" />
                </div>
            </div>

        </div>

    </div>
@endsection
