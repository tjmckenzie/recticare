@extends('master')

@section('page_title', 'Recticare')
@section('page_id', 'where-to-buy')

@section('content')

    <div id="page-header">
        <div class="container padded">
            <div class="half">
                <h1>Where To Buy</h1>
            </div>
            <div class="half">
                <p>Available in store at these fine retailers.</p>
            </div>
        </div>
    </div>

    <div class="gradient-background">

        <div id="product-list" class="container padded">

            <div class="product">
                <div class="col-half image">
                    <img src="{{ url('images/product/RectiCare_Cream_Front.png') }}" />
                    <h3>RectiCare Anorectal Cream (30g)</h3>
                </div>
                <div class="col-half locations">

                    <div class="retailers">
                        <h4 class="underline">Buy Online or In-Store:</h4>
                        <img src="http://placehold.it/75x50" />
                        <img src="http://placehold.it/75x50" />
                        <img src="http://placehold.it/75x50" />
                        <img src="http://placehold.it/75x50" />
                        <img src="http://placehold.it/75x50" />

                        <h4 class="underline">Buy In-Store Only:</h4>
                        <img src="http://placehold.it/75x50" />
                    </div>
                </div>
            </div>

            <div class="product">
                <div class="col-half image">
                    <img src="{{ url('images/product/RectiCare_Complete_Front.png') }}" />
                    <h3>RectiCare Complete</h3>
                </div>
                <div class="col-half locations">
                    <div class="retailers">
                        <h4 class="underline">Buy Online or In-Store:</h4>
                        <img src="http://placehold.it/75x50" />
                        <img src="http://placehold.it/75x50" />
                        <img src="http://placehold.it/75x50" />
                        <img src="http://placehold.it/75x50" />
                        <img src="http://placehold.it/75x50" />

                        <h4 class="underline">Buy In-Store Only:</h4>
                        <img src="http://placehold.it/75x50" />
                    </div>
                </div>
            </div>

            <div class="product">
                <div class="col-half image">
                    <img src="{{ url('images/product/RectiCare_CreamVert_Front.png') }}" />
                    <h3>RectiCare Anorectal Cream (15g)</h3>
                </div>
                <div class="col-half locations">
                    <div class="retailers">
                        <h4 class="underline">Buy Online or In-Store:</h4>
                        <img src="http://placehold.it/75x50" />
                        <img src="http://placehold.it/75x50" />
                        <img src="http://placehold.it/75x50" />
                        <img src="http://placehold.it/75x50" />
                        <img src="http://placehold.it/75x50" />

                        <h4 class="underline">Buy In-Store Only:</h4>
                        <img src="http://placehold.it/75x50" />
                    </div>
                </div>
            </div>

            <div class="product">
                <div class="col-half image">
                    <img src="{{ url('images/product/RectiCare_Wipes_Front.png') }}" />
                    <h3>RectiCare Wipes</h3>
                </div>
                <div class="col-half locations">
                    <div class="retailers">
                        <h4 class="underline">Buy Online or In-Store:</h4>
                        <img src="http://placehold.it/75x50" />
                        <img src="http://placehold.it/75x50" />
                        <img src="http://placehold.it/75x50" />
                        <img src="http://placehold.it/75x50" />
                        <img src="http://placehold.it/75x50" />

                        <h4 class="underline">Buy In-Store Only:</h4>
                        <img src="http://placehold.it/75x50" />
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
