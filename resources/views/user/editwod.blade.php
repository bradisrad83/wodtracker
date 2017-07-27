@extends('layouts.app')

@section('content')
<div class = "container">
<h1>Edit WOD from {{$wod->created_at->format('M d Y')}}</h1>
<hr>


<form action="/wod/{{$wod->id}}" method="POST" enctype="multipart/form-data">

  {{ csrf_field() }}
  {{ method_field('PUT') }}

<!--
  <div class="form-group row">
    <label for="board_img" class="col-sm-2 form-control-label">Picture of your WOD (whiteboard)</label>
    <div class="col-sm-6">
      <input
             type="file"
             name="board_img">
    </div>
  </div>
-->


  <div class="form-group row">
    <label for="strength" class="col-sm-2 form-control-label">Strength Portion</label>
    <div class="col-sm-6">
      <textarea class="form-control"
             rows="3"
             type="text"
             name="strength"
             placeholder="What is todays strength portion of the workout?">{{$wod->strength}}
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
             placeholder="Anything to comment/note: PR, weight increases, etc...">{{$wod->strength_notes}}
      </textarea>
    </div>
  </div>

  <div class="form-group row">
    <label for="wod_type" class="col-sm-2 form-control-label">Type of WOD</label>
    <div class="col-sm-6">
      <input class="form-control"
             type="text"
             name="wod_type"
             placeholder="AMRAP/For Time"
             value="{{$wod->wod_type}}">
    </div>
  </div>

  <div class="form-group row">
    <label for="wod" class="col-sm-2 form-control-label">Todays WOD</label>
    <div class="col-sm-6">
      <textarea class="form-control"
             rows="3"
             type="text"
             name="wod"
             placeholder="Description of the WOD">{{$wod->wod}}
      </textarea>
    </div>
  </div>

  <div class="form-group row">
    <label for="wod_results" class="col-sm-2 form-control-label">WOD Results</label>
    <div class="col-sm-6">
      <input class="form-control"
             type="text"
             name="wod_results"
             placeholder="Total Reps, Time, How did you do?"
             value="{{$wod->wod_results}}">
    </div>
  </div>

  <div class="form-group row">
    <label for="wod_notes" class="col-sm-2 form-control-label">Notes About Todays WOD</label>
    <div class="col-sm-6">
      <textarea class="form-control"
             rows="3"
             type="text"
             name="wod_notes"
             placeholder="Anything in particular you'd like to remeber/jot down">{{$wod->wod_notes}}
      </textarea>
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-offset-2 col-sm-6">
      <button class="btn btn-primary navbar-inverse" value="submit" type="submit">Save Changes</button>
    </div>
  </div>

  </form>

@endsection
</div>
