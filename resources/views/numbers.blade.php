@extends('layout.app')
@section('content')

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

@endsection