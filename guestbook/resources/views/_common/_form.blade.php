{!! Form::open(['url' => 'add', 'method' => 'post']) !!}
  <div class="form-group">
    {!! Form::label('name', 'Name: ') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('email', 'E-mail: ') !!}
    {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'E-mail']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('message', 'Message: ') !!}
    {!! Form::textarea('message', null, ['class' => 'form-control', 'placeholder' => 'Message']) !!}
  </div>
{!! Form::submit('Add', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
