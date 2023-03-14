@extends('layouts.app')

@section('content')

    <x-headline headline="Add New Task"/>

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

            <form action="{{ route('tasks.store') }}" method="POST">
                @csrf

                <div class="row">

                    {{-- Title --}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="title"> <strong>{{ __('Title') }}</strong></label>
                            <input type="text" name="title" id="title" class="form-control form-control-sm"
                                   maxlength="200">
                        </div>
                    </div>



                    {{-- User --}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="user"> <strong>{{ __('User') }}</strong></label>
                            <select name="user" id="user" class="form-control form-control-sm">
                                <option value="">{{ __('please select...') }}</option>
                                @if (isset($users))
                                    @foreach ($users as $user)
                                        <option value="{{ $user->user_hash }}">{{ $user->lastname }}
                                            , {{ $user->firstname }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>


                    {{-- Product --}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="product"> <strong>{{ __('Product') }}</strong></label>
                            <input type="text" name="product" id="product" class="form-control form-control-sm"
                                   maxlength="200">
                        </div>
                    </div>

                    {{-- Version --}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="version"> <strong>{{ __('Version') }}</strong></label>
                            <input type="text" name="version" id="version" class="form-control form-control-sm"
                                   maxlength="200">
                        </div>
                    </div>

                    {{-- Prio --}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="prio"> <strong>{{ __('Prio') }}</strong></label>
                            <input type="text" name="prio" id="prio" class="form-control form-control-sm"
                                   maxlength="200">
                        </div>
                    </div>

                    {{-- Status --}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="status"> <strong>{{ __('Status') }}</strong></label>
                            <input type="text" name="status" id="status" class="form-control form-control-sm"
                                   maxlength="200">
                        </div>
                    </div>

                    {{-- Type --}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="type"> <strong>{{ __('Type') }}</strong></label>
                            <input type="text" name="type" id="type" class="form-control form-control-sm"
                                   maxlength="200">
                        </div>
                    </div>

                    {{-- Description --}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="description"> <strong>{{ __('Description') }}</strong></label>
                            <textarea id="description" class="form-control" style="height:150px"
                                      name="description"></textarea>
                        </div>
                    </div>

                    {{-- Submit --}}
                    <div class="col-xs-12 col-sm-12 col-md-12 text-left mt-3">

                        <a class="btn btn-primary btn-sm" href="{{ route('tasks.index') }}"><i
                                class="fa fa-arrow-left"></i> {{ __('Back') }}</a>

                        <button type="submit" class="btn btn-primary btn-sm">{{ __('Submit') }}</button>
                    </div>
                </div>

            </form>

        </div>
    </div>

@endsection
