@extends('layouts.app')

@section('content')

    <x-headline headline="Edit User"/>


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

            <x-errors errors="$errors"/>

            <form action="{{ route('users.update', $user->user_hash) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">

                    {{-- User ID --}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('user ID') }}</strong>
                            <input type="text" name="user_id" value="{{ $user->user_id }}"
                                   class="form-control form-control-sm" maxlength="200">
                        </div>
                    </div>

                    {{-- Lastname --}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Lastname') }}</strong>
                            <input type="text" name="lastname" value="{{ $user->lastname }}"
                                   class="form-control form-control-sm" maxlength="200">
                        </div>
                    </div>

                    {{-- Firstname --}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Firstname') }}</strong>
                            <input type="text" name="firstname" value="{{ $user->firstname }}"
                                   class="form-control form-control-sm" maxlength="200">
                        </div>
                    </div>

                    {{-- Job Title --}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Job Title') }}</strong>
                            <input type="text" name="job_title" value="{{ $user->job_title }}"
                                   class="form-control form-control-sm" maxlength="200">
                        </div>
                    </div>

                    {{-- Department --}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Department') }}</strong>
                            <input type="text" name="department" value="{{ $user->department }}"
                                   class="form-control form-control-sm" maxlength="200">
                        </div>
                    </div>

                    {{-- Location --}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Location') }}</strong>
                            <input type="text" name="location" value="{{ $user->location }}"
                                   class="form-control form-control-sm" maxlength="200">
                        </div>
                    </div>

                    {{-- E-Mail --}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('E-Mail') }}</strong>
                            <input type="text" name="email" value="{{ $user->email }}"
                                   class="form-control form-control-sm" maxlength="200">
                        </div>
                    </div>

                    {{-- Description --}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Description') }}</strong>
                            <textarea class="form-control" style="height:150px"
                                      name="description">{{ $user->description }}</textarea>
                        </div>
                    </div>

                    {{-- Submit --}}
                    <div class="col-xs-12 col-sm-12 col-md-12 text-left mt-3">

                        <a class="btn btn-primary btn-sm" href="{{ route('users.index') }}"><i
                                class="fa fa-arrow-left"></i> {{ __('Back') }}</a>

                        <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save"></i> {{ __('Save') }}
                        </button>
                    </div>
                </div>

            </form>

        </div>
    </div>

@endsection
