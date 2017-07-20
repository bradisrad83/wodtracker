@extends('layouts.app')

@section('content')
<div class="container">
<ul>
  <p>{{$profile->name}}</p>
  <img src="https://s3.us-east-2.amazonaws.com/dwtbucket/{{$profile->img_link}}" alt = "" height="200" width="200">
  <li><p><strong>Location: </strong>{{$profile->location}}</p></li>
  <li><p><strong>Age: </strong>{{$profile->age}}</p></li>
  <li><p><strong>Height: </strong>{{$profile->height}}</p></li>
  <li><p><strong>Affiliate: </strong>{{$profile->affiliate}}</p></li>
  <li><p><strong>Front Squat: </strong>{{$profile->front_squat}}</p></li>
  <li><p><strong>Back Squat: </strong>{{$profile->back_squat}}</p></li>
  <li><p><strong>Clean and Jerk: </strong>{{$profile->clean_and_jerk}}</p></li>
  <li><p><strong>Snatch: </strong>{{$profile->snatch}}</p></li>
  <li><p><strong>Deadlift: </strong>{{$profile->deadlift}}</p></li>
  <div class="col-4-sm">
    <li><p><strong>Bio: </strong>{{$profile->bio}}</p></li>
  </div>
  <li><h3><strong><a class="bottom" href ="profile/{{$profile->id}}/edit">Edit Profile</strong></a></h3></li>
</ul>


@stop
</div>
