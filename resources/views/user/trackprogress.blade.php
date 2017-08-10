@extends('layouts.app')

@section('content')
<div class = "container">
  <h1>Tracking: {{$movement}} for {{$tracker}}</h1>
  @if($tracker=='strength')
    @if(count($progress) < 1)
      <p>You have not recorded any {{$movement}} for {{$tracker}}</p>
    @else
      @foreach($progress as $trackprogressstrength => $values)
      <div class="col-sm-2">
        <button type="button" class="btn btn-primary navbar-inverse btn-sm btn-block" data-toggle="modal" data-target="#myModal{{$values->id}}">
          {{$values->created_at->format('M d Y')}}
        </button>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="myModal{{$values->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">{{$values->created_at->format('M d Y')}}</h4>
            </div>
            <div class="modal-body">
              @if($values->wod_img)
                <img src="https://s3.us-east-2.amazonaws.com/dwtbucket/{{$values->wod_img}}" alt = "" height="150" width="300">
              @endif
              <p class="mod"><strong>Strength: </strong>{{$values->strength}}</p>
              <p class="mod"><strong>Strength Notes: </strong>{{$values->strength_notes}}</p>
            </div>
            <div class="modal-footer">
                  <button type="button" class="btn btn-default navbar-inverse" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    @endif
  @else
    @if(count($progress) < 1)
      <p>You have not recorded any {{$movement}} for {{$tracker}}</p>
    @else
      @foreach($progress as $trackprogresswod => $values)
        <div class="col-sm-2">
          <button type="button" class="btn btn-primary navbar-inverse btn-sm btn-block" data-toggle="modal" data-target="#myModal{{$values->id}}">
            {{$values->created_at->format('M d Y')}}
          </button>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="myModal{{$values->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">{{$values->created_at->format('M d Y')}}</h4>
              </div>
              <div class="modal-body">
                @if($values->wod_img)
                  <img src="https://s3.us-east-2.amazonaws.com/dwtbucket/{{$value->wod_img}}" alt = "" height="150" width="300">
                @endif
                <p class="mod"><strong>Type of WOD: </strong>{{$values->wod_type}}</p>
                <p class="mod"><strong>WOD: </strong>{{$values->wod}}</p>
                <p class="mod"><strong>WOD Results: </strong>{{$values->wod_results}}</p>
                <p class="mod"><strong>WOD Notes: </strong>{{$values->wod_notes}}</p>
              </div>
              <div class="modal-footer">
                    <button type="button" class="btn btn-default navbar-inverse" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    @endif
  @endif


@stop
</div>
