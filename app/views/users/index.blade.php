@extends('layouts.main')

@section('title')
    List all users
@stop

@section('content')
    <div class="well">
    <ol>
        @if($users->count())
            @foreach($users as $user)
                <li>
                {{ link_to_route('users.show', $user->name, [$user->id], ['class' => 'btn btn-link']), link_to_route('users.edit', "Edit", [$user->id], ['class' => 'btn btn-sm btn-primary']) }}
                </li>
            @endforeach
        @else
            <p>No users to display.</p>
        @endif
    </ol>
    </div>

    {{ link_to_route('users.create', "Create new user", null, ['class' => 'btn btn-lg btn-info']) }}

@stop