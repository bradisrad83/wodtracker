@extends('layouts.app')

@section('content')
<div class = "container">
<h1>Create Profile</h1>
<h10>please make sure to hit the submit button even if you leave the fields blank</h10>
<hr>


<form action="/profile" method="POST" enctype="multipart/form-data">

  {{ csrf_field() }}

    <div class="form-group row">
      <label for="name" class="col-sm-2 form-control-label">Name</label>
      <div class="col-sm-6">
        <input class="form-control"
               type="text"
               name="name"
               placeholder="Name">
      </div>
    </div>

    <div class="form-group row">
      <label for="location" class="col-sm-2 form-control-label">Location</label>
      <div class="col-sm-6">
        <input class="form-control"
               type="text"
               name="location"
               placeholder="Location">
      </div>
    </div>

    <div class="form-group row">
      <label for="age" class="col-sm-2 form-control-label">Age</label>
      <div class="col-sm-6">
        <input class="form-control"
               type="number"
               name="age"
               placeholder="Age">
      </div>
    </div>

    <div class="form-group row">
      <label for="height" class="col-sm-2 form-control-label">Height</label>
      <div class="col-sm-6">
        <input class="form-control"
               type="text"
               name="height"
               placeholder="Height">
      </div>
    </div>

    <div class="form-group row">
      <label for="weight" class="col-sm-2 form-control-label">Weight</label>
      <div class="col-sm-6">
        <input class="form-control"
               type="text"
               name="weight"
               placeholder="Weight, please specify lbs/kgs">
      </div>
    </div>

    <div class="form-group row">
      <label for="affiliate" class="col-sm-2 form-control-label">Crossfit Affiliate</label>
      <div class="col-sm-6">
        <input class="form-control"
               type="text"
               name="affiliate"
               placeholder="Affiliate">
      </div>
    </div>

    <div class="form-group row">
      <label for="front_squat" class="col-sm-2 form-control-label">Max Front Squa</label>
      <div class="col-sm-6">
        <input class="form-control"
               type="text"
               name="front_squat"
               placeholder="Front Squat, specify lbs/kgs">
      </div>
    </div>

    <div class="form-group row">
      <label for="back_squat" class="col-sm-2 form-control-label">Max Back Squat</label>
      <div class="col-sm-6">
        <input class="form-control"
               type="text"
               name="back_squat"
               placeholder="Back Squat specify lbs/kgs">
      </div>
    </div>

    <div class="form-group row">
      <label for="clean_and_jerk" class="col-sm-2 form-control-label">Max Clean and Jerk</label>
      <div class="col-sm-6">
        <input class="form-control"
               type="text"
               name="clean_and_jerk"
               placeholder="Clean and Jerk, specify lbs/kgs">
      </div>
    </div>

    <div class="form-group row">
      <label for="snatch" class="col-sm-2 form-control-label">Max Snatch</label>
      <div class="col-sm-6">
        <input class="form-control"
               type="text"
               name="snatch"
               placeholder="Snatch, specify lbs/kgs">
      </div>
    </div>

    <div class="form-group row">
      <label for="deadlift" class="col-sm-2 form-control-label">Max Deadlift</label>
      <div class="col-sm-6">
        <input class="form-control"
               type="text"
               name="deadlift"
               placeholder="Deadlift, specify lbs/kgs">
      </div>
    </div>

    <div class="form-group row">
      <label for="bio" class="col-sm-2 form-control-label">Bio</label>
      <div class="col-sm-6">
        <textarea class="form-control"
               rows="5"
               type="text"
               name="bio"
               placeholder="Short description of yourself">
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
        <button class="btn btn-primary navbar-inverse" value="submit" type="submit">Submit</button>
      </div>
    </div>

    </form>
    @endsection
</div>
