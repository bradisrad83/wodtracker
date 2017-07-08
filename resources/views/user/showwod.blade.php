@extends('layouts.app')

@section('content')
<div class = "container">
<h3>WODs</h3>
    <ul class = "list-group">
      @foreach($wods as $wod)
        <li class = "list-group-item">
          <a href="/addwod/{{$wod->id}}">{{$wod->created_at->format('M d Y')}}</a>
        </li>
      @endforeach
    </ul>



</div>
@stop
