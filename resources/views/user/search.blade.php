@extends('layouts.app')

@section('content')
<div class = "container">
<h2>Registered Users</h2>
    @foreach($profiles as $profile)
      <li class = "list-group-item">

          <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal{{$profile->id}}">
              {{$profile->name}}
          </button>
            <!-- Modal -->
            <div class="modal fade" id="myModal{{$profile->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"></h4>
                  </div>
                  <div class="modal-body">
                    <ul>
                      <p>{{$profile->name}}</p>
                      <img src="" alt = "profile_pic" height="100" width="100">
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
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-default"><a href="/message">Message</a></button>
                  </div>
                </div>
              </div>
            </div>
      </li>
    @endforeach
</div>
@stop
