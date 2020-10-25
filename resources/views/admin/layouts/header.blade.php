@php($user = \Illuminate\Support\Facades\Auth::user())
    <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/admin/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/admin/css/AdminLTE.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/admin/css/all.min.css') }}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/admin/css/_all-skins.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/style.css') }}"/>
    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <script type="text/javascript" src="{{ asset('assets/admin/js/jquery.min.js') }}"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- wrapper -->
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="{{ url('/') }}" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>LT</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg">EMotel</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <i class="fas fa-bars"></i>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    @if(isset($user))
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="hidden-xs">{{ $user->name }}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="{{ url('/') }}" class="btn btn-default btn-flat">Trang chủ</a>
                                        <a href="{{ route('profile.show') }}" class="btn btn-default btn-flat">Hồ sơ</a>

                                    </div>
                                    <div class="pull-right">
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <a href="{{ route('logout') }}" class="btn btn-default btn-flat"
                                               onclick="event.preventDefault();
                                                                        this.closest('form').submit();">
                                                {{ __('Đăng xuất') }}
                                            </a>
                                        </form>
                                    </div>

                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </nav>
    </header>
