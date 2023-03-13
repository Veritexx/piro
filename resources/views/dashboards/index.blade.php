@extends('layouts.app')

@section('content')

    <x-headline headline="Dashboard"/>

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

            <div class="row">

                <div class="col-xl-3 col-md-6">
                    <div class="widget widget-stats"
                         style="background: linear-gradient(to bottom right, #87CEEB, #1E90FF);">
                        <div class="stats-icon"><i class="fa fa-desktop"></i></div>
                        <div class="stats-info">
                            <h4>{{ strtoupper(__('Total Tasks') )}}</h4>
                            <p>3,291,922</p>
                        </div>
                        <div class="stats-link">
                            <a href="{{ route('tasks.index') }}">{{ __('View Detail') }} <i
                                    class="fa fa-arrow-alt-circle-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="widget widget-stats"
                         style="background: linear-gradient(to bottom right, #87CEEB, #1E90FF);">
                        <div class="stats-icon"><i class="fa fa-desktop"></i></div>
                        <div class="stats-info">
                            <h4>{{ strtoupper(__('Total Tasks') )}}</h4>
                            <p>3,291,922</p>
                        </div>
                        <div class="stats-link">
                            <a href="{{ route('tasks.index') }}">{{ __('View Detail') }} <i
                                    class="fa fa-arrow-alt-circle-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>

@endsection
