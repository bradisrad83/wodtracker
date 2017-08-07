@extends('layouts.app')

@section('content')
<div class = "container">
  <h1>TEST</h1>
  @foreach($progress as $trackprogress)
    <p>{{$trackprogress->strength}}</p>
  @endforeach
@stop
</div>
