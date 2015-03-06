@extends('layouts.main')

@section('title')
    Show single user
@stop

@section('content')
    <div class="well">
    <ul>

        <li>Name :
        {{{ $single_user->name }}}
        </li>

        <li>Monthly :
        {{{ $single_user->monthly }}}
        </li>
    </ul>
    </div>

    {{ link_to_route('users.index', "View all users", null, ['class' => 'btn btn-lg btn-info']) }}
@stop