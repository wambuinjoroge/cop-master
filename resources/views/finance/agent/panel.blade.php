
@yield('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{$title or 'ecp'}}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
@include('partials.topbar')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

 <!-- Main Header -->
    @include('agent.header')
<!-- Sidebar -->
    @include('agent.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
              Agent Panel
            </h1>
            <!-- You can dynamically generate breadcrumbs here -->
            <ol class="breadcrumb">
                <li><a href="/agent"><i class="fa fa-home" ></i>Dashboard</a></li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
          
           <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-shopping-cart"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Deliveries</span>
              <span class="info-box-number">0</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
       <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-person-add"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Visitors</span>
              <span class="info-box-number">0</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- ./col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"> <i class="fa fa-bullhorn"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Alarm Report</span>
              <span class="info-box-number">0</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- ./col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-laptop"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Security Services</span>
              <span class="info-box-number">0</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- ./col -->
        
      </div>


        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    <!-- Footer -->
    @include('layouts.footer')
   
  
</div><!-- ./wrapper -->
@include('includes.js')
@yield('js')

</body>
</html>