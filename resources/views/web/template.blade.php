<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    <title>Front-End</title>
</head>
<body>
    <div id="app">
        @include('web.partials.navbar-menu')

        <div class="container" id="app">
            @yield('content')
        </div>

        @include('web.partials.footer')
    </div>

    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
