@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-sm-8" style=float:left;>
    <h1>Jリーグ</h1>
            @foreach ($jtweet->statuses as $t)                
                <div class="card" style="margin:5px;padding:5px;">
                    <p>{{$t->full_text}}</p><br>
                </div>                
            @endforeach
    </div>
    <div class="col-sm-4" style=float:right;>
        <h1>J1</h1>
        @foreach($team as $team)
            <button onclick="location.href='{{url('/')}}/jtweet/{{$team->id}}'" type="button" class="btn btn-primary" style="margin:10px;">{{$team->teamname}}</button>
        @endforeach
    </div>
</div>
@endsection