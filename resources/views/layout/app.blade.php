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
<div class="container">
        <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" ><a href="{{ url('/genesis') }}">Genesis</a></li>
            <li role="presentation" ><a href="{{ url('/exodus') }}">Exodus</a></li>
            <li role="presentation" ><a href="{{ url('/leviticus') }}">Leviticus</a></li>
            <li role="presentation" ><a href="{{ url('/numbers') }}">Numbers</a></li>
            <li role="presentation" ><a href="{{ url('/deutronomy') }}">Deutronomy</a></li>
          </ul>
        </nav>
        <h3 class="text-muted"><a href="{{ url('/') }}">Holy Bible</a></h3>
    </div>
</div>

        <!-- My navigation ends here -->

        <!-- Let all the content be viewed here -->
        <div class="wrapper">

            @yield('content')

        </div>
        <!-- Content ended -->

<!-- JavaScript files Come here -->
<script src="{{ asset('js/app.js') }}"></script>

    </body>
</html>
