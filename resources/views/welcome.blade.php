@extends('layout.app')
@section('content')

<div class="content">
    <!-- My Logic and Content will come here -->
    <div class="col-md-10 col-md-offset-1">
        <div class="row">
                <div class="panel">
                <div class="panel-header">
                    <h3 style="text-align:center;"><u>Holy Bible</u></h3>
                </div>
       <!--  <hr> -->
                <div class="panel-subtitle">
                    <p style="text-align:center;">This is a {{ $json_a['bible'] }} bible version.</p>
                    <p style="text-align:center;">Still in development</p>
                </div>
        <hr>
                <div class="panel-body">
                    @foreach($json_a['books'] as $play)
                    <ul class="list-unstyled activity-list">
                    <li>
                    <h4>{{$play['id']}} : {{$play['name']}}</h4>
                    Contains :{{$play['chapters']}} chapters<br/><hr>
                    </li>
                    </ul>
                    @endforeach            
                </div>
            </div>
        </div>
    </div>
</div>

@endsection