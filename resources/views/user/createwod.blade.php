@extends('layouts.app')

@section('content')
<div class = "container">
<h1>Create a WOD</h1>
<hr>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="/wod" method="POST" enctype="multipart/form-data">

  {{ csrf_field() }}

<div class="form-group row">
  <label for="wod_date" class="col-sm-2 form-control-label">Date of WOD **Please leave blank if you are entering todays WOD**</label>
    <div class="col-sm-6">
      <input class="form-control"
             type="text"
             name="wod_date"
             placeholder="Date of WOD: Month Day Year">
    </div>
  </div>


 <div class="form-group row">
    <label for="board_img" class="col-sm-2 form-control-label">Picture of your WOD (whiteboard)</label>
    <div class="col-sm-6">
      <input
             type="file"
             name="board_img"
             height=150
             width=300>
    </div>
  </div>



  <div class="form-group row">
    <label for="strength" class="col-sm-2 form-control-label">Strength Portion</label>
    <div class="col-sm-6">
      <textarea class="form-control"
             rows="3"
             type="text"
             name="strength"
             placeholder="What is todays strength portion of the workout?">
      </textarea>
    </div>
  </div>

  <div class="form-group row">
    <label for="strength_notes" class="col-sm-2 form-control-label">Strength Notes</label>
    <div class="col-sm-6">
      <textarea class="form-control"
             rows="3"
             type="text"
             name="strength_notes"
             placeholder="Anything to comment/note: PR, weight increases, etc...">
      </textarea>
    </div>
  </div>

  <div class="form-group row">
    <label for="wod_type" class="col-sm-2 form-control-label">Type of WOD</label>
    <div class="col-sm-6">
      <input class="form-control"
             type="text"
             name="wod_type"
             placeholder="AMRAP/For Time/Benchmark/Hero">
    </div>
  </div>

  <div class="form-group row">
    <label for="wod" class="col-sm-2 form-control-label">Todays WOD</label>
    <div class="col-sm-6">
      <textarea class="form-control"
             rows="3"
             type="text"
             name="wod"
             placeholder="Description of the WOD">
      </textarea>
    </div>
  </div>

  <div class="form-group row">
    <label for="wod_results" class="col-sm-2 form-control-label">WOD Results</label>
    <div class="col-sm-6">
      <input class="form-control"
             type="text"
             name="wod_results"
             placeholder="Total Reps, Time, How did you do?">
    </div>
  </div>

  <div class="form-group row">
    <label for="wod_notes" class="col-sm-2 form-control-label">Notes About Todays WOD</label>
    <div class="col-sm-6">
      <textarea class="form-control"
             rows="3"
             type="text"
             name="wod_notes"
             placeholder="Anything in particular you'd like to remeber/jot down">
      </textarea>
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
