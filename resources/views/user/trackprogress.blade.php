@extends('layouts.app')

@section('content')
<div class = "container">
  <h1>Tracking: {{$movement}} for {{$tracker}}</h1>
  @if($tracker=='strength')
    @if(count($progress) < 1)
      <p>You have not recorded any {{$movement}} for {{$tracker}}</p>
    @else
      <p>Now I gotta show the portions
    @endif
  @else
    @if(count($progress) < 1)
      <p>You have not recorded any {{$movement}} for {{$tracker}}</p>
    @else
      <p>Now I gotta show the portions2222222
    @endif
  @endif


@stop
</div>
