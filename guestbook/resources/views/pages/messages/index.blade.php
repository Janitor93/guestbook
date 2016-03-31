@extends('index')
@section('content')

      @include('_common._form')
      <hr>

      <div class="text-right"><b>All messages: </b><i class="badge">{{$count}}</i><br></div>

      @include('pages.messages._items')
@stop
