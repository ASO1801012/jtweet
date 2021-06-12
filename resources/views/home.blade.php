@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-sm-12" style='text-align: center;'>
        <h1>J1</h1>
        @foreach($team as $team)
            <button onclick="location.href='{{url('/')}}/jtweet/{{$team->id}}'" type="button" class="btn btn-primary" style="margin:10px;">{{$team->teamname}}</button>
        @endforeach
    </div>
</div>
@endsection