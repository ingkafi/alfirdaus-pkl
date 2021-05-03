<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('assets/assets/images/favicon.png') }}">
    <title>MYP HS Al Firdaus</title>
    <!-- Custom CSS -->
    <!-- Sweet Alert -->

    <link href="{{ URL::asset('assets/assets/extra-libs/c3/c3.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('assets/assets/libs/chartist/dist/chartist.min.css') }}" rel="stylesheet"
        type="text/css">
    <link href="{{ URL::asset('assets/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet"
        type="text/css">
    <!-- Custom CSS -->
    <link href="{{ URL::asset('assets/dist/css/parentstyle.min.css') }}" rel="stylesheet" type="text/css">
</head>

<body>

    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">

        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                    <div class="navbar-brand">
                        <!-- Logo icon -->
                        <a href="{{ url('/hrt/dashboard') }}">
                            <div>
                                <!-- Dark Logo icon -->
                                <img src="{{ URL::asset('welcomepage/images/logo2.png') }}" alt="homepage"
                                    class="dark-logo') }}" />
                                <!-- Light Logo icon -->
                            </div>
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent"
                    style="background-image: linear-gradient(to right,#56c596   ,#11998e); ">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto ml-3 pl-1" style="color: white">
                        <li>
                            <script>
                                var hari = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu"];
                                document.write(hari[new Date().getDay()])

                            </script>,
                            <script>
                                document.write(new Date().getDate())

                            </script>
                            <script>
                                var months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus",
                                    "September",
                                    "Oktober", "November", "Desember"
                                ];
                                document.write(months[new Date().getMonth()])

                            </script>
                            <script>
                                document.write(new Date().getFullYear())

                            </script>
                        </li>
                    </ul>


                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <span class="ml-2 d-none d-lg-inline-block" style="color: white"><span>
                                        {{ auth()->user()->name }}</span>
                                    <span class="text-dark"></span> <i data-feather="chevron-down"
                                        class="svg-icon"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"><i data-feather="log-out"
                                        class="svg-icon mr-2 ml-1"></i>
                                    Keluar</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="/parent/home"
                                aria-expanded="false"><i data-feather="monitor" class="feather-icon"></i><span
                                    class="hide-menu">Dashboard</span></a></li>
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Aplikasi</span></li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link" href="/parent/presensi" aria-expanded="false">
                                <i data-feather="book-open" class="feather-icon"></i>
                                <span class="hide-menu">Riwayat Presensi</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link" href="/parent/raport" aria-expanded="false">
                                <i data-feather="file-text" class="feather-icon"></i>
                                <span class="hide-menu">Raport Online</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link" href="/parent/portofolio/all" aria-expanded="false">
                                <i data-feather="file" class="feather-icon"></i>
                                <span class="hide-menu">Portofolio</span></a>
                        </li>
                        <li class="list-divider"></li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link" href="/" aria-expanded="false">
                                <i data-feather="home" class="feather-icon"></i>
                                <span class="hide-menu">Halaman Utama</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                <i data-feather="log-out" class="feather-icon"></i>
                                <span class="hide-menu">Keluar</span>
                            </a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <script src="{{ URL::asset('assets/assets/libs/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ URL::asset('assets/assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
        <script src="{{ URL::asset('assets/assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <!-- apps -->
        <!-- apps -->
        <script src="{{ URL::asset('assets./dist/js/app-style-switcher.js') }}"></script>
        <script src="{{ URL::asset('assets/dist/js/feather.min.js') }}"></script>
        <script src="{{ URL::asset('assets/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}">
        </script>
        <script src="{{ URL::asset('assets/dist/js/sidebarmenu.js') }}"></script>
        <!--Custom JavaScript -->
        <script src="{{ URL::asset('assets/dist/js/custom.min.js') }}"></script>
        <!--This page JavaScript -->
        <script src="{{ URL::asset('assets/assets/extra-libs/c3/d3.min.js') }}"></script>
        <script src="{{ URL::asset('assets/assets/extra-libs/c3/c3.min.js') }}"></script>
        <script src="{{ URL::asset('assets/assets/libs/chartist/dist/chartist.min.js') }}"></script>
        <script
            src="{{ URL::asset('assets/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') }}">
        </script>
        <script src="{{ URL::asset('assets/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js') }}"></script>
        <script src="{{ URL::asset('assets/assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js') }}">
        </script>
        <script src="{{ URL::asset('assets/dist/js/pages/dashboards/dashboard1.min.js') }}"></script>

        <div class="main-content" id="panel">
            @yield('content')
        </div>
    </div>
    @include('sweetalert::alert')
</body>
