@extends('layouts.app')

@section('content')
<div class = "container">
<h1>Registered Users</h1>
<br>
    @foreach($users as $user)
        <div class="col-sm-2">
          <p><button type="button" class="btn btn-user btn-sm navbar-inverse btn-block" data-toggle="modal" data-target="#myModal{{$user->id}}">
                {{$user->id}}:  {{$user->name}}</button></p>
        </div>

          @foreach($profiles as $profile)
            <!-- Modal -->
            <div class="modal fade" id="myModal{{$profile->user_id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"></h4>
                  </div>
                  <div class="modal-body">
                    <ul>
                      <p class="mod">{{$profile->name}}</p>
                      <img src="{{$profile->img_link}}" alt = "profile_pic" height="100" width="100">
                      <li><p class="mod"><strong>Location: </strong>{{$profile->location}}</p></li>
                      <li><p class="mod"><strong>Age: </strong>{{$profile->age}}</p></li>
                      <li><p class="mod"><strong>Height: </strong>{{$profile->height}}</p></li>
                      <li><p class="mod"><strong>Affiliate: </strong>{{$profile->affiliate}}</p></li>
                      <li><p class="mod"><strong>Front Squat: </strong>{{$profile->front_squat}} lbs</p></li>
                      <li><p class="mod"><strong>Back Squat: </strong>{{$profile->back_squat}} lbs</p></li>
                      <li><p class="mod"><strong>Clean and Jerk: </strong>{{$profile->clean_and_jerk}} lbs</p></li>
                      <li><p class="mod"><strong>Snatch: </strong>{{$profile->snatch}} lbs</p></li>
                      <li><p class="mod"><strong>Deadlift: </strong>{{$profile->deadlift}} lbs</p></li>
                      <li><p class="mod"><strong>Bio: </strong>{{$profile->bio}}</p></li>
                    </ul>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default navbar-inverse" data-dismiss="modal">Close</button>
                    <!--
                    <button type="button" class="btn btn-default navbar-inverse"><a class="bottom" href="/message">Message</a></button>
                  -->
                  </div>
                </div>
              </div>
            </div>
            @endforeach
    @endforeach
    @stop
</div>
