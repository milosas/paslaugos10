<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Admin panelė</title>
    <!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}">
    <!-- Font Awesome -->
<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <!-- Ionicons -->
<link rel="stylesheet" href="{{asset('css/ionicons.css')}}">
<link rel="stylesheet" href="css/icomoon.css">
    <!-- Theme style -->
<link rel="stylesheet" href="{{asset('css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect. -->
<link rel="stylesheet" href="{{asset('css/skins/skin-blue.min.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
<link rel="stylesheet"
href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->

<body class="hold-transition skin-blue sidebar-mini">
  @if (session('ZINUTE'))
    <div class="alert alert-success">
      {{session('ZINUTE')}}
    </div>

  @endif
<div class="wrapper">

    <!-- Main Header -->
<header class="main-header">

        <!-- Logo -->
<a href="{{route('welcome')}}" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
<span class="logo-mini"><b>HOME</b></span>
            <!-- logo for regular state and mobile devices -->
<span class="logo-lg"><b>Home</b></span>
</a>

        <!-- Header Navbar -->
<nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
<a href="#"  data-toggle="push-menu" role="button">
  <span class="btn btn-warning">Sutraukti panelę</span>
</a>
            <!-- Navbar Right Menu -->
<div class="navbar-custom-menu">
<ul class="nav navbar-nav">

                    <!-- User Account Menu -->
<li class="nav-item">
  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
  {{ Auth::user()->name }}
  </a>
  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
  <a class="dropdown-item" href="{{ route('logout') }}"
  onclick="event.preventDefault();
  document.getElementById('logout-form').submit();">
  {{ __('Atsijungti') }}
  </a>
  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
  @csrf
  </form>
  </div>
</li>
</ul>
</div>
</nav>
</header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <!-- Sidebar user panel (optional) -->
{{-- @auth
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
@endauth --}}
            <!-- search form (Optional) -->

            <!-- Sidebar Menu -->
            <ul class="sidebar-menu" data-widget="tree">

                <li class="active"><a href="{{route('admin.categoriesList', 'categories')}}"><i class="fa fa-link"></i> <span>Kategorijos</span></a></li>
                <li><a href=""><i class="fa fa-link"></i> <span>Paslaugos</span></a></li>
                <li class="active"><a href="#"><i class="fa fa-link"></i> <span>Vartotojai</span></a></li>


                    </ul>
                </li>
            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          @if (session('message'))
                        <div class="alert alert-success">
                          {{session('message')}}
                        </div>

                      @endif
            @yield('header')


        </section>

        <!-- Main content -->
        <section class="content container-fluid">

            <!--------------------------
              | Your Page Content Here |
              -------------------------->
            @yield('content')

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">

    </footer>



    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 3 -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('js/adminlte.min.js')}}"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. -->
</body>
</html>
