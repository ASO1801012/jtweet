@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-sm-4" style=float:right;>
        <h1>選手</h1>
    </div>
    <div class="col-sm-8" style=float:left;>
        <h1>{{$team->teamname}}</h1>
            @foreach ($jtweet->statuses as $t)                
                <div class="card" style="margin:5px;padding:5px;">
                    <p>{{$t->full_text}}</p><br>
                </div>                
            @endforeach
    </div>
</div>
@endsection