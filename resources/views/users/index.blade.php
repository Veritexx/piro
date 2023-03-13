@extends('layouts.app')

@section('content')

    <x-headline headline="Users"/>

    <div class="panel panel-inverse">

        <div class="panel-heading">
            <h4 class="panel-title"></h4>
            <div class="panel-heading-btn">
                <a href="#" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i
                        class="fa fa-expand"></i></a>
                <a href="#" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i
                        class="fa fa-redo"></i></a>
                <a href="#" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i
                        class="fa fa-minus"></i></a>
                <a href="#" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i
                        class="fa fa-times"></i></a>
            </div>
        </div>
        <div class="panel-body">

            <div class="col-lg-12 margin-tb">
                <a class="btn btn-success btn-sm mb-3"
                   href="{{ route('users.create') }}"> {{ __('Create New User') }}</a>
            </div>

            @if ($message = Session::get('success'))
                <div class="alert alert-success" id="msg_fade">
                    <p>{{ $message }}</p>
                </div>
            @endif

            <table id="datatable" class="table table-bordered">
                <thead>

                <tr>
                    <th>{{ __('No') }}</th>
                    <th>{{ __('User ID') }}</th>
                    <th>{{ __('Lastname') }}</th>
                    <th>{{ __('Firstname') }}</th>
                    <th>{{ __('Job Title') }}</th>
                    <th>{{ __('Department') }}</th>
                    <th>{{ __('Location') }}</th>
                    <th>{{ __('Email') }}</th>
                    <th>{{ __('Created at') }}</th>
                </tr>

                </thead>
                <tbody>

                @php ($i = 0)

                @foreach ($users as $user)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td><a href="{{ route('users.show', $user->user_hash) }}">{{ $user->user_id }}</a></td>
                        <td>{{ $user->lastname }}</td>
                        <td>{{ $user->firstname }}</td>
                        <td>{{ $user->job_title }}</td>
                        <td>{{ $user->department }}</td>
                        <td>{{ $user->location }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ germanDateTime($user->created_at) }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>

@endsection
