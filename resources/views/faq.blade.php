@extends('master')

@section('page_title', 'Frequently Asked Questions')
@section('page_id', 'faq')

@section('content')
    <div id="page-header">
        <div class="container padded">
            <div class="half">
                <h1>Frequently Asked Questions</h1>
            </div>
            <div class="half">
                <p>Fusce sed eleifend dolor.</p>
            </div>
        </div>
    </div>

    <div class="container padded">

        <div class="row">
            <div class="half">
                <h2>Aenean ullamcorper</h2>
                <p class="large-text">Donec sed ante non augue convallis pulvinar vel quis urna. Morbi sagittis velit a nibh malesuada consequat. Nunc viverra vel nunc vel fermentum. Praesent tempus convallis ultrices. Etiam dapibus rhoncus velit in pellentesque. Donec at ex quis nisl maximus rutrum at in urna. Integer luctus tortor id placerat facilisis. Mauris at semper est. Phasellus eu pulvinar risus.</p>
            </div>
            <div class="half video-container">
                <iframe src="https://www.youtube.com/embed/IHkJ9gilgFE" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>


        <div class="qa-container">
            <div class="item">
                <h3 class="question">Fusce auctor orci sed nisi cursus, vel mollis dui vestibulum?</h3>
                <p class="answer">Quisque quis blandit augue. Ut eu ante faucibus, volutpat turpis sed, porttitor purus.</p>
            </div>
            <div class="item">
                <h3 class="question">Vivamus a eros quis velit iaculis facilisis a eu metus?</h3>
                <p class="answer">Nunc ac convallis enim, eget elementum velit. Cras ut arcu porttitor, tempus felis in, lobortis enim.</p>
            </div>
            <div class="item">
                <h3 class="question">Cras dictum eros id odio convallis finibus?</h3>
                <p class="answer">Aenean efficitur blandit felis maximus rutrum.</p>
            </div>
            <div class="item">
                <h3 class="question">Duis et metus elementum, semper mi ac, tincidunt felis?</h3>
                <p class="answer">No.</p>
            </div>
            <div class="item">
                <h3 class="question">Suspendisse rutrum urna vitae mollis suscipit?</h3>
                <p class="answer">Yes</p>
            </div>
            <div class="item">
                <h3 class="question">Etiam blandit arcu sed tempus tempus?</h3>
                <p class="answer">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse rutrum a nulla eu ultrices.</p>
            </div>
            <div class="item">
                <h3 class="question">Phasellus id arcu vel est vestibulum tincidunt id et diam?</h3>
                <p class="answer">Aliquam mattis porttitor varius. Sed hendrerit quis ante et vehicula. Vivamus scelerisque, turpis ut bibendum consequat, quam tortor efficitur nibh, nec venenatis nulla dui a ex.</p>
            </div>
        </div>
    </div>
@endsection
