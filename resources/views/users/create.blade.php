@extends('layouts.app')

@section('content')

    <x-headline headline="Add New User"/>

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

            <x-errors errors="$errors"/>

            <form action="{{ route('users.store') }}" method="POST">
                @csrf

                <div class="row">

                    {{-- User ID --}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="user_id"> <strong>{{ __('User ID') }}</strong></label>
                            <input type="text" name="user_id" id="user_id" class="form-control form-control-sm"
                                   maxlength="200">
                        </div>
                    </div>

                    {{-- Lastname --}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="lastname"> <strong>{{ __('Lastname') }}</strong></label>
                            <input type="text" name="lastname" id="lastname" class="form-control form-control-sm" maxlength="200">
                        </div>
                    </div>

                    {{-- Firstname --}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="firstname"> <strong>{{ __('Firstname') }}</strong></label>
                            <input type="text" name="firstname" id="firstname" class="form-control form-control-sm" maxlength="200">
                        </div>
                    </div>

                    {{-- Job Title --}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="job_title"> <strong>{{ __('Job Title') }}</strong></label>
                            <input type="text" name="job_title" id="job_title" class="form-control form-control-sm" maxlength="200">
                        </div>
                    </div>

                    {{-- Department --}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="department"> <strong>{{ __('Department') }}</strong></label>
                            <input type="text" name="department" id="department" class="form-control form-control-sm" maxlength="200">
                        </div>
                    </div>

                    {{-- Company --}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="company"> <strong>{{ __('Company') }}</strong></label>
                            <input type="text" name="company" id="company" class="form-control form-control-sm" maxlength="200">
                        </div>
                    </div>

                    {{-- Location --}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="location"> <strong>{{ __('Location') }}</strong></label>
                            <input type="text" name="location" id="location" class="form-control form-control-sm" maxlength="200">
                        </div>
                    </div>

                    {{-- EMail --}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="email"> <strong>{{ __('E-Mail') }}</strong></label>
                            <input type="text" name="email" id="email" class="form-control form-control-sm" maxlength="200">
                        </div>
                    </div>


                    {{-- Description --}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Description') }}</strong>
                            <textarea class="form-control" style="height:150px"
                                      name="description"></textarea>
                        </div>
                    </div>

                    {{-- Submit --}}
                    <div class="col-xs-12 col-sm-12 col-md-12 text-left mt-3">

                        <a class="btn btn-primary btn-sm" href="{{ route('users.index') }}"><i
                                class="fa fa-arrow-left"></i> {{ __('Back') }}</a>

                        <button type="submit" class="btn btn-primary btn-sm">{{ __('Submit') }}</button>
                    </div>
                </div>

            </form>

        </div>
    </div>

@endsection
