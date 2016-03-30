@extends('index')
@section('content')

      @include('_common._form')
      <hr>

      <div class="text-right"><b>All messages: </b><i class="badge">0</i><br></div>

      <div class="messages">
        <div class="panel panel-default">

          <div class="panel-heading">
            <h3 class="panel-title">
              <span>Karl</span>
              <span class="pull-right label label-info">17:00:02 / 03.08.2045</span>

            </h3>

          </div>

          <div class="panel-body">
            I'm back
            <hr>
            <div class="pull-right">
              <a class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-pencil"></i>
              </a>
              <button class="btn btn-danger">
                <i class="glyphicon glyphicon-trash"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
@stop
