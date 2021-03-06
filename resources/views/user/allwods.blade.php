@extends('layouts.app')

@section('content')
<div class = "container">
<h1>WODs</h1>
      @foreach($wods as $wod)
        @if($wod->wod_date)
          <div class="col-sm-2">
            <button type="button" class="btn btn-primary navbar-inverse btn-sm btn-block" data-toggle="modal" data-target="#myModal{{$wod->id}}">
                {{$wod->wod_date}}
            </button>
          </div>
        @else
          <div class="col-sm-2">
            <button type="button" class="btn btn-primary navbar-inverse btn-sm btn-block" data-toggle="modal" data-target="#myModal{{$wod->id}}">
                {{$wod->created_at->format('M d Y')}}
            </button>
          </div>
        @endif
            <!-- Modal -->
            <div class="modal fade" id="myModal{{$wod->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    @if($wod->wod_date)
                      <h4 class="modal-title" id="myModalLabel">{{$wod->wod_date}}</h4>
                    @else
                      <h4 class="modal-title" id="myModalLabel">{{$wod->created_at->format('M d Y')}}</h4>
                    @endif
                  </div>
                  <div class="modal-body">
                    @if($wod->wod_img)
                      <img src="https://s3.us-east-2.amazonaws.com/dwtbucket/{{$wod->wod_img}}" alt = "" height="150" width="300">
                    @endif
                    <p class="mod"><strong>Strength: </strong>{{$wod->strength}}</p>
                    <p class="mod"><strong>Strength Notes:</strong> {{$wod->strength_notes}}</p>
                    <p class="mod"><strong>WOD Type:</strong> {{$wod->wod_type}}</p>
                    <p class="mod"><strong>WOD: </strong>{{$wod->wod}}</p>
                    <p class="mod"><strong>WOD Results:</strong> {{$wod->wod_results}}</p>
                    <p class="mod"><strong>WOD Notes:</strong> {{$wod->wod_notes}}</p>
                  </div>
                  <div class="modal-footer">
                    <form action="/wod/{{$wod->id}}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="button" class="btn btn-default navbar-inverse" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-default navbar-inverse"><a class="bottom" href="/wod/{{$wod->id}}/edit">Edit</a></button>
                        <button class="btn btn-primary navbar-inverse" value="submit" type="submit">Delete</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
      @endforeach
      @stop

</div>
