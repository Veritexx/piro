@extends('layouts.app')

@section('content')

    <x-headline headline="Add New Task" />

    <x-errors errors="$errors" />

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf

        <div class="row">

            {{-- Title --}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{ __('Title') }}</strong>
                    <input type="text" name="title" class="form-control form-control-sm" maxlength="200">
                </div>
            </div>

            {{-- User --}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{ __('User') }}</strong>
                    <input type="text" name="user" class="form-control form-control-sm" maxlength="200">
                </div>
            </div>

            {{-- Product --}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{ __('Product') }}</strong>
                    <input type="text" name="product" class="form-control form-control-sm" maxlength="200">
                </div>
            </div>

            {{-- Version --}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{ __('Version') }}</strong>
                    <input type="text" name="version" class="form-control form-control-sm" maxlength="200">
                </div>
            </div>

            {{-- Prio --}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{ __('Prio') }}</strong>
                    <input type="text" name="prio" class="form-control form-control-sm" maxlength="200">
                </div>
            </div>

            {{-- Status --}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{ __('Status') }}</strong>
                    <input type="text" name="status" class="form-control form-control-sm" maxlength="200">
                </div>
            </div>

            {{-- Type --}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{ __('Type') }}</strong>
                    <input type="text" name="type" class="form-control form-control-sm" maxlength="200">
                </div>
            </div>

            {{-- Description --}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{ __('Description') }}</strong>
                    <textarea class="form-control" style="height:150px" name="description"></textarea>
                </div>
            </div>

            {{-- Submit --}}
            <div class="col-xs-12 col-sm-12 col-md-12 text-left mt-3">

                <a class="btn btn-primary btn-sm" href="{{ route('tasks.index') }}"><i class="fa fa-arrow-left"></i> {{ __('Back') }}</a>

                <button type="submit" class="btn btn-primary btn-sm">{{ __('Submit') }}</button>
            </div>
        </div>

    </form>

@endsection
