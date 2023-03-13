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

    {{--    @vite(['resources/sass/app.scss', 'resources/js/app.js'])--}}

</head>
<body>

{{--<div id="loader" class="app-loader">
    <span class="spinner"></span>
</div>--}}


<div id="app" class="app app-header-fixed app-sidebar-fixed">

    <div id="header" class="app-header">

        <div class="navbar-header">
            <a href="#" class="navbar-brand"><span class="navbar-logo"></span> <b>Color</b> Admin</a>
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


            <div class="navbar-item navbar-user dropdown">
                <a href="#" class="navbar-link dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown">

                    <span>
							<span class="d-none d-md-inline">{{ __('Setup') }}</span>
							<b class="caret"></b>
						</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end me-1">
                    <a href="#" class="dropdown-item">Edit Profile</a>
                    <a href="#" class="dropdown-item d-flex align-items-center">
                        Inbox
                        <span class="badge bg-danger rounded-pill ms-auto pb-4px">2</span>
                    </a>
                    <a href="#" class="dropdown-item">Calendar</a>
                    <a href="#" class="dropdown-item">Settings</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">Log Out</a>
                </div>
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
                                    {{ Auth::user()->name }}
                                </div>
                                <div class="menu-caret ms-auto"></div>
                            </div>
                            <small>Frontend developer</small>
                        </div>
                    </a>
                </div>
                <div id="appSidebarProfileMenu" class="collapse">
                    <div class="menu-item pt-5px">
                        <a href="#" class="menu-link">
                            <div class="menu-icon"><i class="fa fa-cog"></i></div>
                            <div class="menu-text">Settings</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="#" class="menu-link">
                            <div class="menu-icon"><i class="fa fa-pencil-alt"></i></div>
                            <div class="menu-text"> Send Feedback</div>
                        </a>
                    </div>
                    <div class="menu-item pb-5px">
                        <a href="#" class="menu-link">
                            <div class="menu-icon"><i class="fa fa-question-circle"></i></div>
                            <div class="menu-text"> Helps</div>
                        </a>
                    </div>
                    <div class="menu-divider m-0"></div>
                </div>
                <div class="menu-header">Navigation</div>


                {{-- Dashboard --}}
                <div class="menu-item">
                    <a href="#" class="menu-link">
                        <div class="menu-icon">
                            <i class="fab fa-dashboard"></i>
                        </div>
                        <div class="menu-text">Dashboard</div>
                    </a>
                </div>

                {{-- Tasks --}}
                <div class="menu-item has-sub">
                    <a href="#" class="menu-link">
                        <div class="menu-icon">
                            <i class="fa fa-sitemap"></i>
                        </div>
                        <div class="menu-text">Tasks</div>
                        <div class="menu-caret"></div>
                    </a>
                    <div class="menu-submenu">
                        <div class="menu-item">
                            <a href="{{ route('tasks.index') }}" class="menu-link">
                                <div class="menu-text">Dashboard v1</div>
                            </a>
                        </div>
                    </div>
                </div>
                {{-- <div class="menu-item has-sub">
                     <a href="#" class="menu-link">
                         <div class="menu-icon">
                             <i class="fa fa-hdd"></i>
                         </div>
                         <div class="menu-text">Email</div>
                         <div class="menu-badge">10</div>
                     </a>
                     <div class="menu-submenu">
                         <div class="menu-item">
                             <a href="#" class="menu-link">
                                 <div class="menu-text">Inbox</div>
                             </a>
                         </div>
                         <div class="menu-item">
                             <a href="#" class="menu-link">
                                 <div class="menu-text">Compose</div>
                             </a>
                         </div>
                         <div class="menu-item">
                             <a href="#" class="menu-link">
                                 <div class="menu-text">Detail</div>
                             </a>
                         </div>
                     </div>
                 </div>--}}


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

</body>
</html>
