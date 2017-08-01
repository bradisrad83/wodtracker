@extends('layouts.app')

@section('content')
<div class = "container">
  <h1>Track Progress</h1>
    <form action="/progress/{{$progress}}" method="GET" enctype="multipart/form-data">
        {{ csrf_field() }}
        <h3>What movement would you like to track?</h3>
          <div class="row">
            <div class="col-sm-5">
              <select id="movement" name="movement" class="form-control">
                <option>Back Squat</option>
                <option>Chest 2 Bar Pull Ups</option>
                <option>Clean and Jerk</option>
                <option>Deadlift</option>
                <option>Front Squat</option>
                <option>Hand Stand Push Ups</option>
                <option>Kettle Bell Swings</option>
                <option>Muscle Ups</option>
                <option>Overhead Squat</option>
                <option>Power Clean</option>
                <option>Power Snatch</option>
                <option>Pull Ups</option>
                <option>Push Jerk</option>
                <option>Push Press</option>
                <option>Ring Dips</option>
                <option>Snatch</option>
                <option>Squat Clean</option>
                <option>Strict Press</option>
                <option>Sumo Deadlift High Pull</option>
                <option>Toes 2 Bar</option>
                <option>Thruster</option>
                <option>Wall Balls</option>
              </select>
            </div>
          </div>
          <br>
         <h3>Where would you want to track it? </h3>
          <div class="row">
            <div class="col-sm-5">
              <select id="tracker" name="track" class="form-control">
                <option>Strength</option>
                <option>WOD</option>
              </select>
            </div>
          </div>
          <br>
          <div class="form-group row">
            <div class="col-sm-6">
              <button class="btn btn-primary navbar-inverse" value="submit" type="submit">Submit</button>
            </div>
          </div>

      </form>


@stop
</div>
