@extends('layouts.app')

@section('content')

<div class="container">
  <h1>Benchmark/PRs</h1>
    <form action="/benchmark" method="POST">
      {{ csrf_field() }}
        <div class="form-group row">
          <label for="benchmark" class="col-sm-2 form-control-label">Benchmark/Hero WOD/PR: </label>
          <div class="col-sm-6">
            <input class="form-control"
                   type="text"
                   name="benchmark"
                   placeholder="What workout did you do (Grace/Fran/Murph/3RM etc..)?">
          </div>
        </div>

        <div class="form-group row">
          <label for="benchmark_results" class="col-sm-2 form-control-label">Results: </label>
          <div class="col-sm-6">
            <input class="form-control"
                   type="name"
                   name="benchmark_results"
                   placeholder="Results">
          </div>
        </div>

        <div class="form-group row">
          <div class="col-sm-offset-2 col-sm-6">
            <button class="btn btn-primary navbar-inverse" value="submit" type="submit">Submit</button>
          </div>
        </div>

        </form>
        <br>

        @foreach($benchmarks as $benchmark)
          <div class="col-sm-3">
            <button type="button" class="btn btn-primary navbar-inverse btn-sm becnmark-btn btn-block" data-toggle="modal" data-target="#myModal{{$benchmark->id}}">
                {{$benchmark->created_at->format('M d Y')}}: {{$benchmark->benchmark}}
            </button>
        </div>

      <!-- Modal -->
      <div class="modal fade" id="myModal{{$benchmark->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">{{$benchmark->created_at->format('M d Y')}}</h4>
            </div>
            <div class="modal-body">
              <p class="mod"><strong>Benchmark: </strong>{{$benchmark->benchmark}}</p>
              <p class="mod"><strong>Results:</strong> {{$benchmark->benchmark_results}}</p>
            </div>
            <div class="modal-footer">
              <form action="/benchmark/{{$benchmark->id}}" method="POST">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                <button type="button" class="btn btn-default navbar-inverse" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-default navbar-inverse"><a class="bottom" href="/benchmark/{{$benchmark->id}}/edit">Edit</a></button>
                <button class="btn btn-primary navbar-inverse" value="submit" type="submit">Delete</button>
              </form>
            </div>
          </div>
        </div>
      </div>

        @endforeach

@stop
</div>
