@extends('layouts.main')
{{--*************  TITLE  ************************--}}
@section('title')
    List all users
@stop
{{--**************  HEADER INCLUDES  *************--}}
@section('header_includes')
    <link rel="stylesheet" href="{{ URL::asset('css/jquery.dataTables.min.css') }}">
@stop
{{--**************  CONTENT  *********************--}}
@section('content')
    {{--<div class="well">--}}
    {{--<ol>--}}
        {{--@if($users->count())--}}
            {{--@foreach($users as $user)--}}
                {{--<li>--}}
                {{--{{ link_to_route('users.show', $user->name, [$user->id], ['class' => 'btn btn-link']), link_to_route('users.edit', "Edit", [$user->id], ['class' => 'btn btn-sm btn-primary']) }}--}}
                  {{--{{ Form::model($user, ['route' => ['users.destroy', $user->id], 'method' => 'delete' ]) }}--}}
                    {{--{{ Form::button('destroy', ['type' => 'submit']) }}--}}
                  {{--{{ Form::close() }}--}}
                {{--</li>--}}
            {{--@endforeach--}}
        {{--@else--}}
            {{--<p>No users to display.</p>--}}
        {{--@endif--}}
    {{--</ol>--}}
    {{--</div>--}}

    {{ link_to_route('users.create', "Create new user", null, ['class' => 'btn btn-lg btn-info']) }}

    <p> </br> </p>

    <table id="myTable"  class="table table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>House Name</th>
                <th>Monthly</th>
              </tr>
            </thead>
            <tbody>

                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>
                        {{ link_to_route('users.show', $user->name, [$user->id], ['class' => 'btn btn-link']) }}
                        </td>
                        <td>{{ $user->house_name }}</td>
                        <td>{{ $user->monthly }}</td>
                    </tr>
                @endforeach

            </tbody>
     </table>



@stop
{{--***************  FOOTER_INCLUDES  *************--}}
@section('footer_includes')
    <script src="{{ URL::asset('js/jquery.dataTables.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('#myTable').dataTable();
        });
        </script>
@stop