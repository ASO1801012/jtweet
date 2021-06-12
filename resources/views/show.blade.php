@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-sm-6">
        <h1>{{$team->teamname}}</h1>
            @foreach ($jtweet->statuses as $t)                
                <div class="card" style="margin:5px;padding:5px;">
                    <p>{{$t->full_text}}</p><br>
                </div>                
            @endforeach
    </div>
</div>
@endsection