@extends('layouts.app')

@section('content')
<div class = "container">
<h1>WODs for: </h1>
      @foreach($wods as $wod)
        <li class = "list-group-item">
          <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal{{$wod->id}}">
              {{$wod->created_at->format('M d Y')}}
          </button>
            <!-- Modal -->
            <div class="modal fade" id="myModal{{$wod->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">{{$wod->created_at->format('M d Y')}}</h4>
                  </div>
                  <div class="modal-body">
                    <p><strong>Strength:</strong> {{$wod->strength}}</p>
                    <p><strong>Strength Notes:</strong> {{$wod->strength_notes}}</p>
                    <p><strong>WOD Type:</strong> {{$wod->wod_type}}</p>
                    <p><strong>WOD:</strong> {{$wod->wod}}</p>
                    <p><strong>WOD Results:</strong> {{$wod->wod_results}}</p>
                    <p><strong>WOD Notes:</strong> {{$wod->wod_notes}}</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
        </li>
      @endforeach
      @stop


</div>
