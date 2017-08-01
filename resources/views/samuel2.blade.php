@extends('layout.app')
@section('content')

<div class="content">
    <!-- My Logic and Content will come here -->
    <div class="col-md-10 col-md-offset-1">
        <div class="row">
            <div class="panel">
    <div class="panel-header">
        <h3 style="text-align:center;">{{$json_a['chapters'][0][0]['bookname']}}</h3>
    </div>
    <hr>
    <div class="panel-body">

     @foreach($json_a['chapters'] as $play)
    <div class="panel-body">
    <h4>Chapter {{$play[0]['chapter']}}</h4>
    @foreach($play as $p)
    <ul class="list-unstyled activity-list">
    <li>
    <u>{{$p['chapter']}} : {{$p['verse']}} </u> 
    {{$p['text']}}<br/>
    </li>
    </ul>
    @endforeach
    </div>
    <hr>
    @endforeach 
        
    </div>
</div>
        </div>
    </div>

    

</div>

@endsection