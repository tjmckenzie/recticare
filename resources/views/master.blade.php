<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>@yield('page_title')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @if( env('APP_ENV') != "production")
        <meta name="robots" content="noindex">
        @endif

        @if( env('APP_ENV') != "production" )

        <link rel="stylesheet" href="{{ url('css/app.css') }}">


        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="/manifest.json">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="theme-color" content="#ffffff">

        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
        @endif

        @yield('canonical')

        @yield('styles')

    </head>
    <body id="@yield('page_id')">

        <header class="centered-navigation" role="navigation">
            <div class="centered-navigation-wrapper">
                <a href="{{ url('/') }}" class="mobile-logo">
                    <img src="{{ url('images/logo-nav.png') }}" alt="Recticare Logo">
                </a>
                <a href="javascript:void(0)" id="mobile-menu" class="centered-navigation-mobile-menu">MENU <span class="fa fa-bars"></span></a>
                <nav role="navigation">
                    <ul class="centered-navigation-menu">
                        <li class="nav-link"><a href="{{ url('/products') }}">Products</a></li>
                        <li class="nav-link"><a href="{{ url('/where-to-buy') }}">Where To Buy</a></li>
                        <li class="nav-link logo">
                            <a href="{{ url('/') }}">
                                <img src="{{ url('images/logo-nav.png') }}" alt="Recticare Logo">
                            </a>
                        </li>
                        <li class="nav-link"><a href="{{ url('/doctors') }}">Doctors</a></li>
                        <li class="nav-link"><a href="{{ url('/patient-resources') }}">Patient Resources</a></li>
                        <li class="nav-link coupon"><a href="javascript:void(0)" class="btn shadow">Get Coupons</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        @yield('content')

        <footer class="footer">
            <div class="container">
                <ul class="horizontal-nav">
                    <li><a href="{{ url('/about-us') }}">About Us</a></li>
                    <li><a href="{{ url('/reviews') }}">Reviews</a></li>
                    <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                    <li><a href="{{ url('/safety') }}">Safety & Adverse Effects</a></li>
                    <li><a href="{{ url('/privacy') }}">Privacy Policy</a></li>
                    <li><a href="{{ url('/faq') }}">FAQS</a></li>
                </ul>
                <hr />
                <span>Copyright &copy; 2016 RectiCare - All Rights Reserved</span>
            </div>
        </footer>

        <script   src="https://code.jquery.com/jquery-3.1.0.min.js"   integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="   crossorigin="anonymous"></script>
        <script type="text/javascript" src="{{ url('js/bundle.js') }}"></script>
        @yield('scripts')

        @if ( env('APP_ENV') == "local" )
        <script type="text/javascript">
            document.write('<script src="//localhost:35729/livereload.js?snipver=1" type="text/javascript"><\/script>')
        </script>
        @endif
    </body>
</html>
