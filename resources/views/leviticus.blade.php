<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Leviticus</title>

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

                <h1>{{$json_a['chapters'][0][0]['bookname']}}</h1>
                @foreach($json_a['chapters'] as $play)
                <div class="panel-body">
                @foreach($play as $p)
                <ul class="list-unstyled activity-list">
                <li>
                {{$p['chapter']}} : {{$p['verse']}} <br/> 
                {{$p['text']}}<br/>
                </li>
                </ul>
                @endforeach
                </div>
                @endforeach

            </div>
        </div>
    </body>
</html>
