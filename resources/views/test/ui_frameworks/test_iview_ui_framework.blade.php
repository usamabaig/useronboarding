<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel</title>

</head>

<body>
    <div style="font-size: 40px; margin: 20px 0 20px 0;">This page shows Laravel integration with <a href="https://iviewui.com/docs/guide/install-en">iViewUI</a></div>
    <div id="app">
    </div>

    <script type="text/javascript" src="/js/test/iview/test_iview_ui_framework.js"></script>
</body>

</html>
