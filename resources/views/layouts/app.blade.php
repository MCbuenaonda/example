<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Font Awesome JS -->

    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('layouts.partials.navbar')

        <div class="py-4">
            @guest
                @yield('content')
            @else
                <div class="page-wrapper chiller-theme toggled">
                    @include('layouts.partials.sidebar')

                    <div class="page-content">
                        <div class="container">
                            @include('layouts.partials.session-status')

                            @yield('content')
                        </div>

                        <hr>

                        @include('layouts.partials.footer')
                    </div>
                </div>
            @endguest
        </div>
    </div>

    @yield('scripts')
</body>
</html>
