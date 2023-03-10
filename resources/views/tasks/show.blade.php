@extends('layouts.app')

@section('content')

    <x-headline headline="Show Task "  />
    Task ID: {{ $task->title }}
    <hr>

    <div class="row">

        {{-- Title --}}
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{ __('Title') }}</strong>
                <input type="text" name="title" value="{{ $task->title }}" class="form-control form-control-sm"
                       disabled>
            </div>
        </div>

        {{-- User --}}
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{ __('User') }}</strong>
                <input type="text" name="user" value="{{ $task->user_hash }}" class="form-control form-control-sm"
                       disabled>
            </div>
        </div>

        {{-- Product --}}
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{ __('Product') }}</strong>
                <input type="text" name="product" value="{{ $task->product_hash }}" class="form-control form-control-sm"
                       disabled>
            </div>
        </div>

        {{-- Version --}}
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{ __('Version') }}</strong>
                <input type="text" name="version" value="{{ $task->version }}" class="form-control form-control-sm"
                       disabled>
            </div>
        </div>

        {{-- Prio --}}
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{ __('Prio') }}</strong>
                <input type="text" name="prio" value="{{ $task->prio_hash }}" class="form-control form-control-sm"
                       disabled>
            </div>
        </div>

        {{-- Status --}}
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{ __('Status') }}</strong>
                <input type="text" name="status" value="{{ $task->status_hash }}" class="form-control form-control-sm"
                       disabled>
            </div>
        </div>

        {{-- Type --}}
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{ __('Type') }}</strong>
                <input type="text" name="type" value="{{ $task->type_hash }}" class="form-control form-control-sm"
                       disabled>
            </div>
        </div>

        {{-- Description --}}
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{ __('Description') }}</strong>
                <textarea class="form-control" style="height:150px" name="description"
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

            <a class="btn btn-primary btn-sm" href="{{ route('tasks.index') }}"><i class="fa fa-arrow-left"></i> {{ __('Back') }}</a>

            <a class="btn btn-primary btn-sm" href="{{ route('tasks.edit',$task->task_hash) }}"><i class="fa fa-pen"></i> {{ __('Edit Task') }}</a>

            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>  {{ __('Delete Task') }}</button>
        </form>






        </div>
    </div>


@endsection

