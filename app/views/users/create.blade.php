@extends('layouts.main')

@section('title')
    Create new user
@stop

@section('content')

    {{ $errors->first('name', '<div class="alert alert-danger" role="alert">:message</div>') }}

    {{ Form::open( array('route' => 'users.store', 'class' => 'form-inline', 'role' => 'form') ) }}
    <div class="form-group">
        {{ Form::label('name', 'Name of user', array('class' => 'sr-only')) }}
        {{ Form::text('name', null, array('class' => 'form-control ', 'placeholder' => 'Name of the user')) }}
        {{ Form::label('monthly', 'Monthly amount', array('class' => 'sr-only')) }}
        {{ Form::text('monthly', null, array('class' => 'form-control ', 'placeholder' => 'Monthly amount')) }}
        {{ Form::submit('submit', array('class' => 'btn btn-default')) }}
    </div>
    {{ Form::close() }}
@stop