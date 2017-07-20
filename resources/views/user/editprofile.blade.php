@extends('layouts.app')

@section('content')
<div class = "container">
<h1>Edit Profile</h1>
<hr>


<form action="/profile/{{$profile->id}}" method="POST" enctype="multipart/form-data">

  {{ csrf_field() }}
  {{ method_field('PUT') }}

    <div class="form-group row">
      <label for="name" class="col-sm-2 form-control-label">Name</label>
      <div class="col-sm-6">
        <input class="form-control"
               type="text"
               name="name"
               placeholder="Name"
               value="{{$profile->name}}">
      </div>
    </div>

    <div class="form-group row">
      <label for="location" class="col-sm-2 form-control-label">Location</label>
      <div class="col-sm-6">
        <input class="form-control"
               type="text"
               name="location"
               placeholder="Location"
               value="{{$profile->location}}">
      </div>
    </div>

    <div class="form-group row">
      <label for="age" class="col-sm-2 form-control-label">Age</label>
      <div class="col-sm-6">
        <input class="form-control"
               type="number"
               name="age"
               placeholder="Age"
               value="{{$profile->age}}">
      </div>
    </div>

    <div class="form-group row">
      <label for="height" class="col-sm-2 form-control-label">Height</label>
      <div class="col-sm-6">
        <input class="form-control"
               type="text"
               name="height"
               placeholder="Height"
               value="{{$profile->height}}">
      </div>
    </div>

    <div class="form-group row">
      <label for="weight" class="col-sm-2 form-control-label">Weight</label>
      <div class="col-sm-6">
        <input class="form-control"
               type="text"
               name="weight"
               placeholder="Weight, specify lbs/kgs"
               value="{{$profile->weight}}">
      </div>
    </div>

    <div class="form-group row">
      <label for="affiliate" class="col-sm-2 form-control-label">Crossfit Affiliate</label>
      <div class="col-sm-6">
        <input class="form-control"
               type="text"
               name="affiliate"
               placeholder="Affiliate"
               value="{{$profile->affiliate}}">
      </div>
    </div>

    <div class="form-group row">
      <label for="front_squat" class="col-sm-2 form-control-label">Max Front Squat</label>
      <div class="col-sm-6">
        <input class="form-control"
               type="text"
               name="front_squat"
               placeholder="Front Squat, specify lbs/kgs"
               value="{{$profile->front_squat}}">
      </div>
    </div>

    <div class="form-group row">
      <label for="back_squat" class="col-sm-2 form-control-label">Max Back Squat</label>
      <div class="col-sm-6">
        <input class="form-control"
               type="text"
               name="back_squat"
               placeholder="Back Squat, specify lbs/kgs"
               value="{{$profile->back_squat}}">
      </div>
    </div>

    <div class="form-group row">
      <label for="clean_and_jerk" class="col-sm-2 form-control-label">Max Clean and Jerk</label>
      <div class="col-sm-6">
        <input class="form-control"
               type="text"
               name="clean_and_jerk"
               placeholder="Clean and Jerk, specify lbs/kgs"
               value="{{$profile->clean_and_jerk}}">
      </div>
    </div>

    <div class="form-group row">
      <label for="snatch" class="col-sm-2 form-control-label">Max Snatch</label>
      <div class="col-sm-6">
        <input class="form-control"
               type="text"
               name="snatch"
               placeholder="Snatch, specify lbs/kgs"
               value="{{$profile->snatch}}">
      </div>
    </div>

    <div class="form-group row">
      <label for="deadlift" class="col-sm-2 form-control-label">Max Deadlift</label>
      <div class="col-sm-6">
        <input class="form-control"
               type="text"
               name="deadlift"
               placeholder="Deadlift, specify lbs/kgs"
               value="{{$profile->deadlift}}">
      </div>
    </div>

    <div class="form-group row">
      <label for="bio" class="col-sm-2 form-control-label">Bio</label>
      <div class="col-sm-6">
        <textarea class="form-control"
               rows="5"
               type="text"
               name="bio"
               placeholder="Short description of yourself">{{$profile->bio}}
        </textarea>
      </div>
    </div>

    <div class="form-group row">
      <label for="profile_img" class="col-sm-2 form-control-label">Profile Picture</label>
      <div class="col-sm-6">
        <input
               type="file"
               name="profile_img">
      </div>
    </div>

    <div class="form-group row">
      <div class="col-sm-offset-2 col-sm-6">
        <button class="btn btn-primary navbar-inverse" value="submit" type="submit">Save</button>
      </div>
    </div>

    </form>


</div>
<h1>TEST</h1>
    @endsection
