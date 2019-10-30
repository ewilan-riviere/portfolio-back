<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('logo.png') }}" type="image/x-icon">

    @include('layouts.opengraph')
    <title>
        @hasSection('title')
            @yield('title') · {{ config('app.name') }}
        @else
            {{ config('app.name') }}
        @endif
    </title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/laravel.css') }}">
</head>
<body class="parallax">
    <div id="app">
        @include('layouts.navbar')
        <div class="flex-center position-ref full-height">
            <main class="content">
                @yield('content')
            </main>
        </div>
    </div>
</body>
@yield('javascript')
</html>