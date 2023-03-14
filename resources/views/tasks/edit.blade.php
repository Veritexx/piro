@extends('layouts.app')

@section('content')

    <x-headline headline="Edit Task"/>


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

            <x-errors errors="$errors"/>

            <form action="{{ route('tasks.update', $task->task_hash) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">

                    {{-- Title --}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Title') }}</strong>
                            <input type="text" name="title" value="{{ $task->title }}"
                                   class="form-control form-control-sm" maxlength="200">
                        </div>
                    </div>

                    {{-- User --}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="user"><strong>{{ __('User') }}</strong></label>
                            <select name="user" id="user" class="form-control form-control-sm">
                                <option value="">{{ __('please select...') }}</option>
                                @if (isset($users))
                                    @foreach ($users as $user)
                                        @if($user->user_hash == $task->user_hash)
                                            <option value="{{ $user->user_hash }}" selected>{{ $user->lastname }}, {{ $user->firstname }}</option>
                                        @else

                                        <option value="{{ $user->user_hash }}">{{ $user->lastname }}, {{ $user->firstname }}</option>
                                        @endif
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>

                    {{-- Product --}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Product') }}</strong>
                            <input type="text" name="product" value="{{ $task->product_hash }}"
                                   class="form-control form-control-sm" maxlength="200">
                        </div>
                    </div>

                    {{-- Version --}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Version') }}</strong>
                            <input type="text" name="version" value="{{ $task->version }}"
                                   class="form-control form-control-sm" maxlength="200">
                        </div>
                    </div>

                    {{-- Prio --}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Prio') }}</strong>
                            <input type="text" name="prio" value="{{ $task->prio_hash }}"
                                   class="form-control form-control-sm" maxlength="200">
                        </div>
                    </div>

                    {{-- Status --}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Status') }}</strong>
                            <input type="text" name="status" value="{{ $task->status_hash }}"
                                   class="form-control form-control-sm" maxlength="200">
                        </div>
                    </div>

                    {{-- Type --}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Type') }}</strong>
                            <input type="text" name="type" value="{{ $task->type_hash }}"
                                   class="form-control form-control-sm" maxlength="200">
                        </div>
                    </div>

                    {{-- Description --}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Description') }}</strong>
                            <textarea class="form-control" style="height:150px"
                                      name="description">{{ $task->description }}</textarea>
                        </div>
                    </div>

                    {{-- Submit --}}
                    <div class="col-xs-12 col-sm-12 col-md-12 text-left mt-3">

                        <a class="btn btn-primary btn-sm" href="{{ route('tasks.index') }}"><i
                                class="fa fa-arrow-left"></i> {{ __('Back') }}</a>

                        <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save"></i> {{ __('Save') }}
                        </button>
                    </div>
                </div>

            </form>

        </div>
    </div>

@endsection
