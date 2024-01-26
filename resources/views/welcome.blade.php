<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    </head>
    <body class="antialiased">
        <div class="container">
            @yield('content')
        </div>
        <script src="{{ asset('/css/bootstrap.min.js') }}"></script>
    </body>
</html>
