
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
              <button type="button" class="btn btn-default btn-xs"></i> Share</button>
              <button type="button" class="btn btn-default btn-xs"></i> Comment</button>
              <button type="button" class="btn btn-default btn-xs"></i> Like</button>  
            </div> 
            </div>
            <!-- /.box-footer -->
            <div class="box-footer">
              <form action="#" method="#">
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
              <div class="user-block">
              <span class="content-header">  <h1>SMS Message Dashboard</h1></span>
               
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
             <form  method="POST" action="" class="form-horizontal" >
                {{csrf_field()}}
                <div class="form-group{{ $errors->has('household_type') ? 'has-error' : '' }} col-md-12">
                <label class="control-label">Subject</label>
                                                
                                                <select class="form-control" name="household_type">
                                                    <option value="" selected>--select--</option>
                                                    <option value="Report">Report</option>
                                                    <option value="Advertise">Advertise</option>
                                                    <option value="Notice">Notice</option>
                                                </select>
                                                @if ($errors->has('household_type'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('household_type') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }} col-md-12">
                  <label class="control-label">Message</label>
                    <textarea name="postal_address" class="form-control" placeholder="Enter Message " value="{{ old('postal_address') }}" ></textarea>
                       @if ($errors->has('first_name'))
                          <span class="help-block">
                             <strong>{{ $errors->first('first_name') }}</strong>
                          </span>
                        @endif
               </div>
               <table class="table table-responsive table-striped table-bordered">
                  <thead>
                    <th></th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <!--th>Property Number</th-->
                    
                  </thead>
               <tbody>
                 
                  
               </tbody>
             </table> 
              <div class="form-group col-md-6 col-sm-6">
                   <button class="btn btn-success " type="button">Send Message</button>                            
                                                 
                                            </div>
              
            
             </form>
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