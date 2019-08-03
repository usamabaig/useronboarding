@extends('layouts.test.test_pages_list')
@section('title', 'Testing UI Frameworks')
@section('cssSection')
@endsection

@section('content')
<h1>Test UI Frameworks</h1>

<section>
    <h4>Test UI Frameworks:</h4>
    <div class="items">
        <p class="done">
            <a href="{{ route('test.ui_frameworks.tailwind') }}"> Test Tailwind Components</a>
        </p>
        <p class="done">
            <a href="{{ route('test.ui_frameworks.iview') }}"> Test iView UI (Vue Framework)</a> See https://www.iviewui.com/components/modal-en
        </p>
        <p class="done">
            <a href="{{ route('test.ui_frameworks.element') }}"> Test Element UI (Vue Framework)</a> See https://element.eleme.io/
        </p>
        <p class="done">
            <a href="{{ route('test.ui_frameworks.iview_element') }}"> Test Combined iView / Element UI (Vue Framework)</a>
        </p>

    </div>
</section>

@endsection


@section('scriptsSection')
@endsection
