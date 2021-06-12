@foreach ($request->statuses as $t)                
  <p>{{$t->text}}</p><br>                
@endforeach