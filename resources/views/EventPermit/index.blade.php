
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
      Event Permit
      </h1>
      <ol class="breadcrumb">
        <li ><a href="/"><i class="fa fa-home"></i> Dashboard</a></li>
        
        <li class="active"> Event Permit</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
         <center><h3 class="box-title">  Event Permit</h3></center> 

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
        <center><h4 class="box-title">Event Details</h4></center> 
        <div class="row">
                <div class="form-group col-md-6 col-sm-6">
                <label for="exampleInputEmail1">Event Name</label>
                  <input type="email" class="form-control"  placeholder="Enter Event Name">
          </div>
          <div class="form-group col-md-6 col-sm-6">
             <label class="control-label">Event Type</label>
             <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">--select--</option>
                  <option >Assembly</option>
                  <option>Demonstration</option>
                  <option>Parade</option>
                  <option>Party</option>
                  <option>Concert/Perfomance</option>
                  <option>Roadshow</option>
                  <option>Education</option>
                  <option>Others</option>
                  <option>Marathon</option>
                  <option>Festival/Outdoor Market</option>
                </select>
          </div> 
          
          <!-- /.row -->
        </div>
         <div class="form-group">
                  <label for="">Annual Event </label>
                  <label class="radio-inline"><input type="radio" name="optradio">Yes</label>
                  <label class="radio-inline"><input type="radio" name="optradio">No</label>

          </div> 
           <div class="form-group">
                  <label for="">Open to Public </label>
                  <label class="radio-inline"><input type="radio" name="optradio">Yes</label>
                  <label class="radio-inline"><input type="radio" name="optradio">No</label>

          </div> 
        <div class="row">
                <div class="form-group col-md-6 col-sm-6">
                <label for="">Venue / Place</label>
                  <input type="" class="form-control"  placeholder="Enter Venue or Place">
          </div>
          <div class="form-group col-md-6 col-sm-6">
           <label for="">Location</label>
                  <input type="email" class="form-control"  placeholder="Enter Location Name">
          </div> 
          </div>
        </div>
          <div class="row">
               <div class="form-group col-md-6 col-sm-6">
               <label for=""> Start Date / Time </label>
                   <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker">
                </div>
          </div>
         
           <div class="form-group col-md-6 col-sm-6">
            <label for=""> End Date / Time </label>
                   <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker">
                </div>
          </div> 
         
          
        </div>
         <div class="row">
                <div class="form-group col-md-6 col-sm-6">
                <label >Description</label>
                   <textarea name="" class="form-control" placeholder="Enter Description "  ></textarea>
          </div>
         <div class="form-group col-md-6 col-sm-6">
                <label >Address</label>
                   <textarea name="" class="form-control" placeholder="Enter Address "  ></textarea>
          </div>
          
        </div>
        <center><h4 class="box-title">Applicant's Details</h4></center>
         <div class="form-group">
                  <label for="ammount">Applicant Type </label>
                  <label class="radio-inline"><input type="radio" name="optradio">Individual</label>
                    <label class="radio-inline"><input type="radio" name="optradio">Organizor(s) / Sponsor(s)</label>

          </div> 
        <div class="row">
         <div class="form-group col-md-6 col-sm-6">
           <label for="exampleInputEmail1"> Name</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Full Name">
          </div>
                <div class="form-group col-md-6 col-sm-6">
                 <label >Address</label>
                   <textarea name="" class="form-control" placeholder="Enter Address "  ></textarea>
          </div>
          
          
        </div>
          
         
        <div class="box-footer">
                 <a id="add_row" class="btn btn-success pull-left">Submit</a><a id='delete_row' class="btn btn-danger pull-right">Exit</a>
              </div>
       
      </div>
      <!-- /.box -->


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