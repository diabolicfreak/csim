@extends('layouts.main')

@section('title')
    Show single user
@stop

@section('content')
    <div class="well">
    <ul>

        <li>
        {{{ $single_user->name }}}
        </li>

        <li>
        {{{ $single_user->monthly }}}
        </li>
    </ul>
    </div>
@stop