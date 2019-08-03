<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title'): {{env('APP_NAME')}}</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @include('partials.favicons', [])

        <link rel="stylesheet" href="{{ mix('css/my_tailwind.css') }}">
        <link rel="stylesheet" href="/css/test/test_pages_list.css">
        @yield('cssSection')
    </head>

    <body>
        <div class="tw-container">
            @yield('content')
        </div>

        @yield('scriptsSection')

    </body>
</html>
