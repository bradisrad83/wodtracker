@extends('layouts.app')

@section('content')
<div class = "container">
  <h1>Track Progress</h1>
  <h5>*****please not that if you have been taking pictures of WODs this feature will not work*</h5>
    <form action="/progress/user/{{$user->id}}" method="POST">
        {{ csrf_field() }}
        <h3>What movement would you like to track?</h3>
          <div class="form-group row">
            <label for="movement"></label>
            <div class="col-sm-6">
              <input class="form-control"
                    type="text"
                    name="movement"
                    id="movement"
                    placeholder="thruster, pull ups, T2B, deadlift etc...">
            </div>
          </div>
          <br>
         <h3>Where would you want to track it? </h3>
          <div class="form-group row">
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
      <h5>*****If you entered MU for muscle ups, and search for muscle ups, you will not get any results back.
          If you entered kettle bell swings and search for KBS, then you will not get any results back.  
          Please make sure to enter your seach term exactly how you entered them into the WOD.</h5>
          



@stop
</div>
