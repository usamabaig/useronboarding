@extends('layouts.test.test_pages_list')
@section('title', 'Test All Page')
@section('cssSection')
@endsection

@section('content')
<h1>Test pages</h1>

<section>
    <h4>Front-end:</h4>
    <div class="items">
        <p class="done">
            <a href="{{action('StaticController@contactForm')}}">contact us page</a> (example of Keenbrain template with header / footer, and ajax contact form using vue.js)
        </p>
    </div>
    <h4>Test stuff:</h4>
    <div class="items">
        <p class="done">
            <a href="{{ route('test.ui_frameworks.index') }}">Test UI Frameworks</a> (shows example integrations with UI frameworks)
        </p>
    </div>

</section>

@endsection
