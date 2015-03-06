@extends('layouts.main')

@section('title')
    Edit user
@stop

@section('content')

    {{ $errors->first('name', '<div class="alert alert-danger" role="alert">:message</div>') }}

    {{ Form::model($user, array('route' => ['users.update', $user->id], 'method' => 'PUT', 'class' => 'form-inline', 'role' => 'form') ) }}
    <div class="form-group">
        {{ Form::label('name', 'Name of user', array('class' => 'sr-only')) }}
        {{ Form::text('name', null, array('class' => 'form-control ', 'placeholder' => 'Name of the user')) }}
        {{ Form::label('monthly', 'Monthly', array('class' => 'sr-only')) }}
        {{ Form::text('monthly', null, array('class' => 'form-control ', 'placeholder' => 'Monthly')) }}

        {{ Form::submit('submit', array('class' => 'btn btn-default')) }}
    </div>
    {{ Form::close() }}
@stop