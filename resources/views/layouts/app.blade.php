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
    <link href="{{ asset('assets/plugins/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/plugins/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css') }}"
          rel="stylesheet"/>

    {{--    @vite(['resources/sass/app.scss', 'resources/js/app.js'])--}}

</head>
<body>

{{--<div id="loader" class="app-loader">
    <span class="spinner"></span>
</div>--}}


<div id="app" class="app app-header-fixed app-sidebar-fixed">

    <div id="header" class="app-header">

        <div class="navbar-header">
            <img src="{{ asset('img/logos/logo.png') }}" alt="Logo" class="img-fluid p-1 " style="width: 80px; ">
            <a href="{{ route('dashboards.index') }}" </a>

            <button type="button" class="navbar-mobile-toggler" data-toggle="app-sidebar-mobile">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="navbar-nav">
            <div class="navbar-item navbar-form">
                <form action="" method="POST" name="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter keyword"/>
                        <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>

        </div>

    </div>

    <div id="sidebar" class="app-sidebar">

        <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">

            <div class="menu">
                <div class="menu-profile">
                    <a href="#" class="menu-profile-link" data-toggle="app-sidebar-profile"
                       data-target="#appSidebarProfileMenu">
                        <div class="menu-profile-cover with-shadow"></div>
                        <div class="menu-profile-image">
                            <img src="{{ asset('assets/img/user/user-13.jpg') }}" alt=""/>
                        </div>
                        <div class="menu-profile-info">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    {{ Auth::user()->firstname }} {{ Auth::user()->lastname }}
                                </div>
                                <div class="menu-caret ms-auto"></div>
                            </div>
                            <small>{{ Auth::user()->department }}</small>
                        </div>
                    </a>
                </div>
                <div id="appSidebarProfileMenu" class="collapse">
                    <div class="menu-item pt-5px">
                        <a href="#" class="menu-link">
                            <div class="menu-icon"><i class="fa fa-cog"></i></div>
                            <div class="menu-text">{{ __('mySettings') }}</div>
                        </a>
                    </div>

                    <div class="menu-item pb-5px">
                        <a href="#" class="menu-link">
                            <div class="menu-icon"><i class="fa fa-sign-out"></i></div>
                            <div class="menu-text"> {{ __('Logout') }}</div>

                        </a>
                    </div>

                    <div class="menu-divider m-0"></div>
                </div>
                <div class="menu-header">Navigation</div>


                {{-- Dashboard --}}
                <div class="menu-item">
                    <a href="{{ route('dashboards.index') }}" class="menu-link">
                        <div class="menu-icon">
                            <i class="fab fa-dashboard"></i>
                        </div>
                        <div class="menu-text">{{ __('Dashboard') }}</div>
                    </a>
                </div>

                {{-- Task --}}
                <div class="menu-item">
                    <a href="{{ route('tasks.index') }}" class="menu-link">
                        <div class="menu-icon">
                            <i class="fab fa-tasks"></i>
                        </div>
                        <div class="menu-text">Task</div>
                    </a>
                </div>

                {{-- mySettings --}}
                <div class="menu-item">
                    <a href="#" class="menu-link">
                        <div class="menu-icon">
                            <i class="fab fa-tasks"></i>
                        </div>
                        <div class="menu-text">mySettings</div>
                    </a>
                </div>


                {{-- Users --}}
                <div class="menu-item">
                    <a href="{{ route('users.index') }}" class="menu-link">
                        <div class="menu-icon">
                            <i class="fab fa-users"></i>
                        </div>
                        <div class="menu-text">Users</div>
                    </a>
                </div>

                <hr>
                {{-- Logout --}}
                <div class="menu-item">
                    <a href="{{ route('logout') }}" class="menu-link">
                        <div class="menu-icon" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="fab fa-sign-out"></i>
                        </div>
                        <div class="menu-text">{{ __('Logout') }}</div>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>


                <div class="menu-item d-flex">
                    <a href="#"
                       class="app-sidebar-minify-btn ms-auto d-flex align-items-center text-decoration-none"
                       data-toggle="app-sidebar-minify"><i class="fa fa-angle-double-left"></i></a>
                </div>

            </div>

        </div>

    </div>
    <div class="app-sidebar-bg"></div>
    <div class="app-sidebar-mobile-backdrop"><a href="#" data-dismiss="app-sidebar-mobile" class="stretched-link"></a>
    </div>

    <div id="content" class="app-content">

        <main class="py-4">
            <div class="container-fluid">

                @yield('content')

            </div>
        </main>
    </div>

    <a href="#" class="btn btn-icon btn-circle btn-success btn-scroll-to-top" data-toggle="scroll-to-top"><i
            class="fa fa-angle-up"></i></a>

</div>

<script src="{{ ('assets/js/vendor.min.js') }}"></script>
<script src="{{ ('assets/js/app.min.js') }}"></script>

<script src="{{ ('assets/plugins/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ ('assets/plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ ('assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ ('assets/js/demo/table-manage-responsive.demo.js') }}"></script>
<script src="{{ ('assets/js/demo/render.highlight.js') }}"></script>





<script>
    $('#datatable').DataTable({
        responsive: true
    });
</script>

</body>
</html>
