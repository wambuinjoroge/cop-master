
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
     Reminder
      </h1>
      <ol class="breadcrumb">
        <li ><a href="/member"><i class="fa fa-home"></i> Dashboard</a></li>
        
        <li class="active">Reminder</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
         <center><h3 class="box-title"> Reminder</h3></center> 

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
        <div class="row">
                <div class="form-group col-md-6 col-sm-6">
               <label>Category</label>
                <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">--select--</option>
                  <option >Appointment</option>
                  <option>Anniversary</option>
                  <option>Consultation</option>
                  <option>Visiting</option>
                  <option>Others</option>
                </select>
          </div>
          <div class="form-group col-md-6 col-sm-6">
            <label for="exampleInputEmail1">Tittle</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Tittle">
          </div> 
          
          <!-- /.row -->
        </div>
          <div class="row">
                <div class="form-group col-md-6 col-sm-6">
               <label>Start Date</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="reservation">
                </div>
          </div>
          <div class="form-group col-md-6 col-sm-6">
            <label>End Date</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="reservation">
                </div>
          </div> 
          
          <!-- /.row -->
        </div>
         <div class="row">
                <div class="form-group col-md-6 col-sm-6">
              <label for="exampleInputEmail1">Venue</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Venue">
          </div>
          <div class="form-group col-md-6 col-sm-6">
            <label>Description </label>
                  <textarea class="form-control" rows="3" placeholder="Enter Description"></textarea>
          </div> 
          
          <!-- /.row -->
        </div> 
          <div class="box-footer">
                 <a id="add_row" class="btn btn-success pull-left">Save</a><a id='delete_row' class="btn btn-danger pull-right">Exit</a>
              </div>


    </section>
    <!-- /.content -->
  </div>

    <!-- Footer -->
    @include('layouts.footer')
   
    
</div><!-- ./wrapper -->
@include('includes.js')
@yield('js')

</body>
</html>