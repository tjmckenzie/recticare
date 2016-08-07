<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/products', function () {
    return view('products');
});

    Route::get('product/recticare-cream/{section?}', function ( $section = null ) {
        return view('product.recticare-cream', compact('section'));
    });

    Route::get('product/recticare-complete/{section?}', function ( $section = null ) {
        return view('product.recticare-complete', compact('section'));
    });

    Route::get('product/recticare-wipes/{section?}', function ( $section = null ) {
        return view('product.recticare-wipes', compact('section'));
    });

Route::get('/patient-resources/{section?}', function ( $section = null ) {
    return view('patient-resources', compact('section'));
});

Route::get('/where-to-buy', function () {
    return view('where-to-buy');
});

Route::get('/reviews', function () {
    return view('reviews');
});

Route::get('/doctors/{section?}', function ( $section = null ) {
    return view('doctors', compact('section'));
});

Route::get('/about-us', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/safety', function () {
    return view('safety');
});

Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/faq', function () {
    return view('faq');
});
