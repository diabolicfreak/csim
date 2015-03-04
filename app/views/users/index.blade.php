@extends('layouts.main')

@section('title')
    List all users
@stop

@section('content')
    <div class="well">
    <ul>
        @foreach($users as $user)
        <li>
        {{ $user->name }}
        </li>
        @endforeach
    </ul>
    </div>
@stop