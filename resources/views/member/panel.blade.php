
@yield('content')
<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="connect | share | empower">
    <meta name="author" content="machini technologies">
    <link rel="icon" type="image/png" sizes="200x200" href="assets/bootstrap/img/ecp.png">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'e-community police') }}</title>

     @include('partials.topbar')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

 <!-- Main Header -->
    @include('member.header')
<!-- Sidebar -->
    @include('member.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
            Community Member Panel
            </h1>
            <!-- You can dynamically generate breadcrumbs here -->
            <ol class="breadcrumb">
                <li><a href="/member"><i class="fa fa-home" ></i>Dashboard</a></li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
            <!--@yield('content')
            <!-- /.col -->
       
         
            <div class="box-body no-padding">
              <div class="row">
               <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-laptop"></i></span>

            <div class="info-box-content">
              <span class="info-box-number">0</span>
                <span class="info-box-text">Logs</span>
              <span class="username"><a href="#">View Details</a></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-clock-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-number">0</span>
              <span class="info-box-text">Reminders</span>
               <span class="username"><a href="#">View Details</a></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-calendar"></i></span>

            <div class="info-box-content">
              <span class="info-box-number">0</span>
              <span class="info-box-text">Events</span>
              <span class="username"><a href="#">View Details</a></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-bullhorn"></i></span>

            <div class="info-box-content">
              <span class="info-box-number">0</span>
              <span class="info-box-text">Notices</span>
               <span class="username"><a href="#">View Details</a></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- =========================================================== -->
              <div class="col-md-6">
          <!-- Box Comment -->
          <div class="box box-widget">
            <div class="box-header with-border">
              <div class="user-block">
                <span class="content-header">  <h1>Community Forum</h1></span>
              </div>
              <!-- /.user-block -->
              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
              <!-- /.box-tools -->
            </div>
            
            <!-- /.box-body -->
            <div class="box-footer box-comments">
             <div class="user-block">
                <img class="img-responsive pad" src="{{ asset('assets/bootstrap/img/kenyaflag.gif') }}" alt="Photo" style="height: 70px ; width: 80px">
                 <span class="text-muted">  Kenya ni jina nchi ni wewe.</span>
               
                <span class="description">Shared- 7:30 PM Today</span>
              </div>
              <!-- /.box-header -->
            <div class="box-body social-icons">
             <button type="button" class="btn btn-default btn-xs"></i> Follow</button>
              <button type="button" class="btn btn-default btn-xs"><i class="fa fa-facebook fa-"></i> Share</button>
               <button type="button" class="btn btn-default btn-xs"></i> Comment</button>
              <button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
              <span class="pull-right text-muted">1,207,00 likes - 503,000 comments</span>
            </div>
              <div class="box-comment">
                <!-- User image -->
                <img class="img-circle img-sm" src="{{ asset('assets/dist/img/user2-160x160.jpg') }}" alt="User Image">

                <div class="comment-text">
                      <span class="username">
                        Maria Gonzales
                        <span class="text-muted pull-right">8:03 PM Today</span>
                      </span><!-- /.username -->
                  It is a long established fact that a reader will be distracted
                  by the readable content of a page when looking at its layout.
                </div>
                <!-- /.comment-text -->
              </div>
              <div class="box-comment">
                <!-- User image -->
                <img class="img-circle img-sm" src="{{ asset('assets/dist/img/user2-160x160.jpg') }}" alt="User Image">

                <div class="comment-text">
                      <span class="username">
                        Maria Gonzales
                        <span class="text-muted pull-right">8:03 PM Today</span>
                      </span><!-- /.username -->
                  It is a long established fact that a reader will be distracted
                  by the readable content of a page when looking at its layout.
                </div>
                <!-- /.comment-text -->
              </div>
            </div>
            <!-- /.box-footer -->
            <div class="box-footer">
              <form action="#" method="post">
                <img class="img-circle img-sm" src="{{ asset('assets/dist/img/user2-160x160.jpg') }}" alt="User Image">
                <!-- .img-push is used to add margin to elements next to floating images -->
                <div class="img-push">
                  <input type="text" class="form-control input-sm" placeholder="Press enter to post comment">
                </div>
              </form>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
         <div class="col-md-6">
          <!-- Box Comment -->
          <div class="box box-widget">
            <div class="box-header with-border">
              <div class="user-block" style="height: 50px;font-weight: bold;">
              <span class="content-header">  <h1>Advertisement</h1></span>
               
              </div>
              <!-- /.user-block -->
              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <div class="medium-4 columns wow slideInRight" data-wow-duration="2s">
                   <div class="partners">
                       <img  src="{{ asset('assets/bootstrap/img/partners/africastalking.png') }}" width = "45%" alt="africastalking logo" />
                 <img src="{{ asset('assets/bootstrap/img/partners/afrilabs.png') }}" width="50%" alt="afrilabs logo" />
               </div>
            </div><br>
            <div class="medium-4 columns wow slideInRight" data-wow-duration="2s">
                   <div class="partners">
                       <img  src="{{ asset('assets/bootstrap/img/payment/airtel.jpeg') }}" width = "45%" alt="africastalking logo" />
                 <img src="{{ asset('assets/bootstrap/img/payment/saf.jpeg') }}" width="50%" alt="afrilabs logo" />
               </div>
            </div><br>
            </div>  
          
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
            </div>
            <!-- /.box-body -->
    
          <!-- /. box -->
       
        <!-- /.col -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    <!-- Footer -->
    @include('layouts.footer')
   
    
</div><!-- ./wrapper -->
@include('includes.js')
@yield('js')

</body>
</html>