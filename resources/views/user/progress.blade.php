@extends('layouts.app')

@section('content')
<div class = "container">
  <h1>Track Progress</h1>
    <form action="/progress/user/{{$user->id}}" method="POST">
        {{ csrf_field() }}
        <h3>What movement would you like to track?</h3>
          <div class="row">
            <div class="col-sm-5">
              <select id="movement" name="movement" class="form-control">
                <option>Clean</option>
                <option>Deadlift</option>
                <option>Jerk</option>
                <option>Squat</option>
                <option>Snatch</option>
              </select>
            </div>
          </div>
          <br>
         <h3>Where would you want to track it? </h3>
          <div class="row">
            <div class="col-sm-5">
              <select id="tracker" name="track" class="form-control">
                <option>strength</option>
                <option>wod</option>
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
