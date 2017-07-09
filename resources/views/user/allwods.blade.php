@extends('layouts.app')

@section('content')
<div class = "container">
<h3>WODs</h3>
      @foreach($wods as $wod)
        <li class = "list-group-item">

        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
            {{$wod->created_at->format('M d Y')}}
        </button>

              <!-- Modal -->
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">{{$wod->created_at->format('M d Y')}}</h4>
                    </div>
                    <div class="modal-body">
                      <p><strong>Strength: {{$wod->strength}}</p>

                      <p><strong>Strength Results: {{$wod->strength_results}}</p>

                      <p><strong>Strength Notes: {{$wod->strength_notes}}</p>

                      <p><strong>WOD Type: {{$wod->wod_type}}</p>

                      <p><strong>WOD: {{$wod->wod}}</p>

                      <p><strong>WOD Results: {{$wod->wod_results}}</p>

                      <p><strong>WOD Notes: {{$wod->wod_notes}}</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>
        </li>
      @endforeach



</div>
@stop
