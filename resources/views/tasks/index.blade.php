@extends('layouts.app')

@section('content')

    <x-headline headline="Tasks" />

        <div class="col-lg-12 margin-tb">
                <a class="btn btn-success btn-sm mb-3" href="{{ route('tasks.create') }}"> {{ __('Create New Task') }}</a>
        </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success" id="msg_fade">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
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
        @foreach ($tasks as $task)
            <tr>
                <td>{{ ++$i }}</td>
                <td><a href="{{ route('tasks.show', $task->task_hash) }}">{{ $task->task_id }}</a> </td>
                <td>{{ $task->title }}</td>
                <td>{{ $task->user_hash }}</td>
                <td>{{ $task->product_hash }}</td>
                <td>{{ $task->version }}</td>
                <td>{{ $task->prio_hash }}</td>
                <td>{{ $task->status_hash }}</td>
                <td>{{ $task->type_hash }}</td>
                <td>{{ germanDateTime($task->created_at) }}</td>


            </tr>
        @endforeach
    </table>

    {!! $tasks->links() !!}

@endsection
