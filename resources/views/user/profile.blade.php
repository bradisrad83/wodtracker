@extends('layouts.app')

@section('content')
<div class = "container">
<ul>
  <p>{{$profile->name}}</p>
  <img src = "{{$profile->img_link}}" alt = "profile_pic" height="200" width="200">
  <li><p><strong>Location: </strong>{{$profile->location}}</p></li>
  <li><p><strong>Age: </strong>{{$profile->age}}</p></li>
  <li><p><strong>Height: </strong>{{$profile->height}}</p></li>
  <li><p><strong>Affiliate: </strong>{{$profile->affiliate}}</p></li>
  <li><p><strong>Front Squat: </strong>{{$profile->front_squat}} lbs</p></li>
  <li><p><strong>Back Squat: </strong>{{$profile->back_squat}} lbs</p></li>
  <li><p><strong>Clean and Jerk: </strong>{{$profile->clean_and_jerk}} lbs</p></li>
  <li><p><strong>Snatch: </strong>{{$profile->snatch}} lbs</p></li>
  <li><p><strong>Deadlift: </strong>{{$profile->deadlift}} lbs</p></li>
  <li><p><strong>Bio: </strong>{{$profile->bio}}</p></li>
</ul>

<h3><a href ="profile/{{$profile->id}}/edit">Edit Profile</a></h3>

</div>

@stop
