@extends('layouts.app')

@section('content')

    <x-headline headline="Show Task "/>

    <div class="panel panel-inverse">

        <div class="panel-heading">
            <h4 class="panel-title">Task ID: {{ $task->title }}</h4>
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

            <div class="row">

                {{-- Title --}}
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="title"><strong>{{ __('Title') }}</strong></label>
                        <input type="text" name="title" id="title" value="{{ $task->title }}" class="form-control form-control-sm"
                               disabled>
                    </div>
                </div>

                {{-- User --}}
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="user"> <strong>{{ __('User') }}</strong></label>
                        <input type="text" name="user" id="user" value="{{ $task->user_hash }}"
                               class="form-control form-control-sm"
                               disabled>
                    </div>
                </div>

                {{-- Product --}}
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="product"> <strong>{{ __('Product') }}</strong></label>
                        <input type="text" name="product" id="product" value="{{ $task->product_hash }}"
                               class="form-control form-control-sm"
                               disabled>
                    </div>
                </div>

                {{-- Version --}}
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="version"> <strong>{{ __('Version') }}</strong></label>
                        <input type="text" name="version" id="version" value="{{ $task->version }}"
                               class="form-control form-control-sm"
                               disabled>
                    </div>
                </div>

                {{-- Prio --}}
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="prio"> <strong>{{ __('Prio') }}</strong></label>
                        <input type="text" name="prio" id="prio" value="{{ $task->prio_hash }}"
                               class="form-control form-control-sm"
                               disabled>
                    </div>
                </div>

                {{-- Status --}}
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="status"> <strong>{{ __('Status') }}</strong></label>
                        <input type="text" name="status" id="status" value="{{ $task->status_hash }}"
                               class="form-control form-control-sm"
                               disabled>
                    </div>
                </div>

                {{-- Type --}}
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="type"> <strong>{{ __('Type') }}</strong></label>
                        <input type="text" name="type" id="type" value="{{ $task->type_hash }}"
                               class="form-control form-control-sm"
                               disabled>
                    </div>
                </div>

                {{-- Description --}}
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="description"> <strong>{{ __('Description') }}</strong></label>
                        <textarea id="description" class="form-control" style="height:150px" name="description"
                                  disabled>{{ $task->description }}</textarea>
                    </div>
                </div>

                <hr class="mt-3">

                {{-- <x-cud-date-times task_hash="$task->task_hash" />--}}

                {{-- Submit --}}

                <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                    <form action="{{ route('tasks.destroy',$task->task_hash) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <a class="btn btn-primary btn-sm" href="{{ route('tasks.index') }}"><i
                                class="fa fa-arrow-left"></i> {{ __('Back') }}</a>

                        <a class="btn btn-primary btn-sm" href="{{ route('tasks.edit',$task->task_hash) }}"><i
                                class="fa fa-pen"></i> {{ __('Edit Task') }}</a>

                        <button type="submit" class="btn btn-danger btn-sm"><i
                                class="fa fa-trash"></i> {{ __('Delete Task') }}</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection
