<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <title>{{ config('app.name', 'Prio') }}</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>

    <link href="{{ asset('assets/css/vendor.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/default/app.min.css') }}" rel="stylesheet"/>

</head>
<body>

{{--<div id="loader" class="app-loader">
    <span class="spinner"></span>
</div>--}}


<div id="app" class="app app-header-fixed app-sidebar-fixed">


        <main class="py-4">
            <div class="container-fluid">

                @yield('content')

            </div>
        </main>


</div>

<script src="{{ ('assets/js/vendor.min.js') }}"></script>
<script src="{{ ('assets/js/app.min.js') }}"></script>

</body>
</html>
