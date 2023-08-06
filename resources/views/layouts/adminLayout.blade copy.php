<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>3 Kings Swimming Pool | Admin </title>

        <!-- Fav Icon -->
       

        <!-- Style -->
        @include('layouts.adminComponents.lib.Style')

    </head>

    <body class="hold-transition sidebar-mini layout-navbar-fixed">
        <!-- layout-footer-fixed   -->
        <div class="wrapper">

            <!-- Navbar -->
            @include('layouts.adminComponents.navBar')


            <!-- Main Side Bar -->
            @include('layouts.adminComponents.sideBar')

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0">

                                    @yield('header')

                                </h1>
                            </div><!-- /.col -->
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
                                    <li class="breadcrumb-item active">

                                        @yield('header')

                                    </li>
                                </ol>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <div class="content">
                    <div class="container-fluid">

                        @yield('content')


                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->


            <!-- Control Sidebar -->
            @include('layouts.adminComponents.controlSlideBar')

            <!-- /.control-sidebar -->

            <!-- Main Footer -->
            @include('layouts.adminComponents.footer')


        </div>
        <!-- ./wrapper -->

        <!-- Logout Modal and Form -->
        @include('layouts.adminComponents.modal.logoutModal')

        <!-- Js -->
        @include('layouts.adminComponents.lib.js')
        {{--  --}}


    </body>

</html>







<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Starter</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

   <!-- Style -->
   @include('layouts.adminComponents.lib.Style')
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
<div class="wrapper">
<!-- Main Header -->
    @include('layouts.adminComponents.navBar')
<!-- /Main Header -->
  
  <!-- Left side column. contains the logo and sidebar -->
  @include('layouts.adminComponents.sideBar')
 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>

        @yield('header')
        <small>@yield('header')</small>

      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        
        @yield('content')

        
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  @include('layouts.adminComponents.footer')
  


</div>
<!-- ./wrapper -->
<!-- Logout Modal and Form -->
@include('layouts.adminComponents.modal.logoutModal')
<!-- REQUIRED JS SCRIPTS -->
@include('layouts.adminComponents.lib.js')

</body>
</html>