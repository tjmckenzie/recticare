@extends('master')

@section('page_title', 'Contact Us')
@section('page_id', 'contact')

@section('content')
    <div id="page-header">
        <div class="container padded">
            <div class="half">
                <h1>Contact Us</h1>
            </div>
            <div class="half">
                <p>Fusce sed eleifend dolor.</p>
            </div>
        </div>
    </div>

    <div class="container padded">
        <p>Praesent ac purus eget augue congue convallis ac et massa. Nam sit amet ex nec mi placerat mattis. Vestibulum commodo, mi in posuere tincidunt, turpis ipsum tempor mauris, ac facilisis ex erat quis felis. Nulla a tellus nec metus feugiat finibus eget ac dui. Ut sed orci hendrerit, blandit quam sed, ultrices ante. Sed bibendum odio facilisis viverra lacinia. Suspendisse in diam dolor. Pellentesque eu vehicula est. Nam fringilla ac diam nec vulputate. Nunc non dolor quis nisl lacinia mattis. In sit amet eleifend nulla. Donec maximus ultricies ante vitae pharetra. Cras ex leo, dapibus sit amet ex ut, aliquam rhoncus nisi. Etiam vehicula fermentum turpis, id sagittis urna lobortis in. Vestibulum vitae porttitor massa.</p>

        @if (session()->has('success'))
        <div class="msg success">
            <p>{{ session('success') }}</p>
        </div>
        @endif

        <form method="POST" action="{{ action('ContactController@store') }}">
            {{ csrf_field() }}

            <div class="form-row">
                <div class="col half">
                    <div class="form-input {{ ($errors->has('name')) ? 'has-error'  :''}}">
                        <label for="name">Full Name: @if($errors->has('name')) <span class="error-msg">Required</span> @endif</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}">
                    </div>
                </div>

                <div class="col half">
                    <div class="form-input {{ ($errors->has('subject')) ? 'has-error'  :''}}">
                        <label for="subject">Subject: @if($errors->has('subject')) <span class="error-msg">Required</span> @endif</label>
                        <input type="text" name="subject" id="subject" value="{{ old('subject') }}">
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
                    <div class="form-input {{ ($errors->has('email')) ? 'has-error'  :''}}">
                        <label for="email">Email: @if($errors->has('email')) <span class="error-msg">Required</span> @endif</label>
                        <input type="text" name="email" id="email" value="{{ old('email') }}">
                    </div>
                </div>
            </div>


            <div class="form-input {{ ($errors->has('message')) ? 'has-error'  :''}}">
                <label for="message">Message: @if($errors->has('message')) <span class="error-msg">Required</span> @endif</label>
                <textarea name="message" id="message">{{ old('message') }}</textarea>
            </div>

            <div class="form-row sm-full">
                <div class="col two-third sm-full">
                    <div class="form-input {{ ($errors->has('promotions')) ? 'has-error'  :''}}">
                        @if($errors->has('promotions')) <span class="error-msg">Required</span> @endif
                        <label for="promotions">
                            <input type="checkbox" name="promotions" id="promotions" checked value="1" />
                            I Would Like to Receive More Information About Special Promotions and Future Offers!
                        </label>
                    </div>
                </div>
                <div class="col third right sm-full">
                    <input type="submit" value="Send">
                </div>
            </div>
        </form>

    </div>
@endsection
