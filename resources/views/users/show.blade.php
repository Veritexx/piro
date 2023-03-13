@extends('layouts.app')

@section('content')

    <x-headline headline="Show User"/>

    <div class="panel panel-inverse">

        <div class="panel-heading">
            <h4 class="panel-title">User ID: {{ $user->user_id }}</h4>
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

                {{-- Lastname --}}
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="lastname"><strong>{{ __('Lastname') }}</strong></label>
                        <input type="text" name="lastname" id="lastname" value="{{ $user->lastname }}"
                               class="form-control form-control-sm"
                               disabled>
                    </div>
                </div>

                {{-- Firstname --}}
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="firstname"> <strong>{{ __('Firstname') }}</strong></label>
                        <input type="text" name="firstname" id="firstname" value="{{ $user->firstname }}"
                               class="form-control form-control-sm"
                               disabled>
                    </div>
                </div>

                {{-- Job Title --}}
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="job_title"> <strong>{{ __('Job Title') }}</strong></label>
                        <input type="text" name="job_title" id="job_title" value="{{ $user->job_title }}"
                               class="form-control form-control-sm"
                               disabled>
                    </div>
                </div>

                {{-- Department --}}
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="department"> <strong>{{ __('Department') }}</strong></label>
                        <input type="text" name="department" id="department" value="{{ $user->department }}"
                               class="form-control form-control-sm"
                               disabled>
                    </div>
                </div>

                {{-- Location --}}
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="location"> <strong>{{ __('Location') }}</strong></label>
                        <input type="text" name="location" id="location" value="{{ $user->location }}"
                               class="form-control form-control-sm"
                               disabled>
                    </div>
                </div>

                {{-- E-Mail --}}
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="email"> <strong>{{ __('E-Mail') }}</strong></label>
                        <input type="text" name="email" id="email" value="{{ $user->email }}"
                               class="form-control form-control-sm"
                               disabled>
                    </div>
                </div>


                {{-- Description --}}
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="description"> <strong>{{ __('Description') }}</strong></label>
                        <textarea id="description" class="form-control" style="height:150px" name="description"
                                  disabled>{{ $user->description }}</textarea>
                    </div>
                </div>

                <hr class="mt-3">

                {{-- <x-cud-date-times task_hash="$user->task_hash" />--}}

                {{-- Submit --}}

                <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                    <form action="{{ route('users.destroy',$user->user_hash) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <a class="btn btn-primary btn-sm" href="{{ route('users.index') }}"><i
                                class="fa fa-arrow-left"></i> {{ __('Back') }}</a>

                        <a class="btn btn-primary btn-sm" href="{{ route('users.edit',$user->user_hash) }}"><i
                                class="fa fa-pen"></i> {{ __('Edit User') }}</a>

                        <button type="submit" class="btn btn-danger btn-sm"><i
                                class="fa fa-trash"></i> {{ __('Delete User') }}</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection
