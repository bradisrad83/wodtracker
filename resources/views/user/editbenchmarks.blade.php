@extends('layouts.app')

@section('content')

<div class = "container">
<h1>Edit {{$benchmark->benchmark}} from {{$benchmark->created_at->format('M d Y')}}</h1>

<form action="/benchmark/{{$benchmark->id}}" method="POST">
  {{ csrf_field() }}
  {{ method_field('PUT') }}

  <div class="form-group row">
    <label for="benchmark_date" class="col-sm-2 form-control-label">Date of Benchmark **Please leave blank if you are entering for todays Date**</label>
      <div class="col-sm-6">
        <input class="form-control"
               type="text"
               name="benchmark_date"
               placeholder="Date of Benchmark: Month Day Year"
               value="{{$benchmark->benchmark_date}}">>
      </div>
    </div>

    <div class="form-group row">
      <label for="benchmark" class="col-sm-2 form-control-label">Benchmark/Hero WOD/PR: </label>
      <div class="col-sm-6">
        <input class="form-control"
               type="text"
               name="benchmark"
               placeholder="What workout did you do (Grace/Fran/Murph/3RM etc..)?"
               value="{{$benchmark->benchmark}}">
      </div>
    </div>

    <div class="form-group row">
      <label for="benchmark_results" class="col-sm-2 form-control-label">Results: </label>
      <div class="col-sm-6">
        <input class="form-control"
               type="name"
               name="benchmark_results"
               placeholder="Results"
               value="{{$benchmark->benchmark_results}}">
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
