@extends('layouts.app')

@section('content')

    <x-headline headline="Tasks"/>

    <div class="panel panel-inverse">

        <div class="panel-heading">
            <h4 class="panel-title">Panel Title here</h4>
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
                   href="{{ route('tasks.create') }}"> {{ __('Create New Task') }}</a>
            </div>

            @if ($message = Session::get('success'))
                <div class="alert alert-success" id="msg_fade">
                    <p>{{ $message }}</p>
                </div>
            @endif
            @php($i = 0)
            <table id="datatable" class="table table-bordered">
                <thead>

                <tr>
                    <th>{{ __('No') }}</th>
                    <th>{{ __('Task ID') }}</th>
                    <th>{{ __('Title') }}</th>
                    <th>{{ __('User') }}</th>
                    <th>{{ __('Product') }}</th>
                    <th>{{ __('Version') }}</th>
                    <th>{{ __('Prio') }}</th>
                    <th>{{ __('Status') }}</th>
                    <th>{{ __('Type') }}</th>
                    <th>{{ __('Created at') }}</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td><a href="{{ route('tasks.show', $task->task_hash) }}">{{ $task->task_id }}</a></td>
                        <td>{{ $task->title }}</td>
                        <td>
                            @php ($user = \App\Models\User::where('user_hash', $task->user_hash)->first())
                            {{ $user->lastname }}, {{ $user->firstname}}<br>{{$user->department}}
                        </td>
                        <td>{{ $task->product_hash }}</td>
                        <td>{{ $task->version }}</td>
                        <td>{{ $task->prio_hash }}</td>
                        <td>{{ $task->status_hash }}</td>
                        <td>{{ $task->type_hash }}</td>
                        <td>{{ germanDateTime($task->created_at) }}</td>
                    </tr>

                @endforeach
                </tbody>
            </table>



        </div>
    </div>

@endsection
