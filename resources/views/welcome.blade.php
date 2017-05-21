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
        <style>

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <!-- My Logic and Content will come here -->
                <h2>Holy Bible</h2>
                <p>Still in development</p>

                <h3>This is a {{ $json_a['bible'] }} bible version.</h3>

                @foreach($json_a['books'] as $play)
                <div class="panel-body">
                <ul class="list-unstyled activity-list">
                <li>
                <h4>{{$play['id']}} : {{$play['name']}}</h4>
                Contains :{{$play['chapters']}} chapters<br/><hr>
                </li>
                </ul>
                </div>
                @endforeach


            </div>
        </div>
    </body>
</html>
