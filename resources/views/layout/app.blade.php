<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Holy Bible | KJV</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    </head>
    <body>
    <!-- My navigation starts here -->
        <div class="flex-center position-ref full-height">
            <div class="nav">
                <nav>
                     <ul class="top-right links">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/genesis') }}">Genesis</a></li>
                        <li><a href="{{ url('/exodus') }}">Exodus</a></li>
                        <li><a href="{{ url('/leviticus') }}">Leviticus</a></li>
                        <li><a href="{{ url('/numbers') }}">Numbers</a></li>
                        <li><a href="{{ url('/deutronomy') }}">Deutronomy</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- My navigation ends here -->

<div class="wrapper">
    @yield('content')
</div>

<script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
