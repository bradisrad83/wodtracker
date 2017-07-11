@extends('layouts.app')

@section('content')
<div class = "container">
<h2>Edit WOD from {{$wod->created_at->format('M d Y')}}</h2>
<hr>


<form action="/wod/{$id}" method="POST">

  {{ csrf_field() }}
  {{ method_field('PUT') }}

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
    <label for="strength_results" class="col-sm-2 form-control-label">Strength Results</label>
    <div class="col-sm-6">
      <textarea class="form-control"
             rows="3"
             type="text"
             name="strength_results"
             placeholder="Your results for todays strength portion">
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
             placeholder="AMRAP/For Time"
             required>
    </div>
  </div>

  <div class="form-group row">
    <label for="wod" class="col-sm-2 form-control-label">Todays WOD</label>
    <div class="col-sm-6">
      <textarea class="form-control"
             rows="3"
             type="text"
             name="wod"
             placeholder="Description of the WOD"
             required>
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
             required>
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
      <button class="btn btn-primary" value="submit" type="submit">Save Changes</button>
    </div>
  </div>

  </form>


</div>
@endsection
