@extends('layouts.app')

@section('content')

    <x-headline headline="Edit Task" />
    Task ID: {{ $task->title }}
    <hr>

    <x-errors errors="$errors" />

    <form action="{{ route('tasks.update', $task->task_hash) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">

            {{-- Title --}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{ __('Title') }}</strong>
                    <input type="text" name="title" value="{{ $task->title }}" class="form-control form-control-sm" maxlength="200">
                </div>
            </div>

            {{-- User --}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{ __('User') }}</strong>
                    <input type="text" name="user" value="{{ $task->user_hash }}" class="form-control form-control-sm" maxlength="200">
                </div>
            </div>

            {{-- Product --}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{ __('Product') }}</strong>
                    <input type="text" name="product" value="{{ $task->product_hash }}" class="form-control form-control-sm" maxlength="200">
                </div>
            </div>

            {{-- Version --}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{ __('Version') }}</strong>
                    <input type="text" name="version" value="{{ $task->version }}" class="form-control form-control-sm" maxlength="200">
                </div>
            </div>

            {{-- Prio --}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{ __('Prio') }}</strong>
                    <input type="text" name="prio" value="{{ $task->prio_hash }}" class="form-control form-control-sm" maxlength="200">
                </div>
            </div>

            {{-- Status --}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{ __('Status') }}</strong>
                    <input type="text" name="status" value="{{ $task->status_hash }}" class="form-control form-control-sm" maxlength="200">
                </div>
            </div>

            {{-- Type --}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{ __('Type') }}</strong>
                    <input type="text" name="type" value="{{ $task->type_hash }}" class="form-control form-control-sm" maxlength="200">
                </div>
            </div>

            {{-- Description --}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{ __('Description') }}</strong>
                    <textarea class="form-control" style="height:150px" name="description">{{ $task->description }}</textarea>
                </div>
            </div>

            {{-- Submit --}}
            <div class="col-xs-12 col-sm-12 col-md-12 text-left mt-3">

                <a class="btn btn-primary btn-sm" href="{{ route('tasks.index') }}"><i class="fa fa-arrow-left"></i> {{ __('Back') }}</a>

                <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save"></i> {{ __('Save') }}</button>
            </div>
        </div>

    </form>

@endsection

