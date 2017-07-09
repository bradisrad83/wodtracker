@extends('layouts.app')

@section('content')
<div class = "container">
<h2>Profile</h2>
<p>Welcome {{$user->location}}</p>
<img src = "{{$user->img_link}}" alt = "profile_pic" height="100" width="100">
<div class = "row">
  <div class = "col-sm-2">
    <p><strong>Max Front Squat: {{$user->front_squat}}</p>
  </div>
</div>
<h3><a href ="/profile/create">Create/Edit Profile</a></h3>

</div>

@stop
