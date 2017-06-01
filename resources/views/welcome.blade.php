@extends('layout.app')
@section('content')

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

@endsection