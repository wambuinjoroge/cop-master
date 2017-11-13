
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
     Visitor's Pass
      </h1>
      <ol class="breadcrumb">
        <li ><a href="#"><i class="fa fa-home"></i> Dashboard</a></li>
        
        <li class="active">visitor's pass</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
         <center><h3 class="box-title"> Visitor's Pass</h3></center> 

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
        <center><h4 class="box-title">Institution Details</h4></center> 
        <div class="row">
                <div class="form-group col-md-6 col-sm-6">
                <label for="exampleInputEmail1">Institution Name</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Institution Name">
          </div>
          <div class="form-group col-md-6 col-sm-6">
            <label for="exampleInputEmail1">Building Name</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Building Name">
          </div> 
          
          <!-- /.row -->
        </div>
         <div class="row">
                <div class="form-group col-md-6 col-sm-6">
                <label for="exampleInputEmail1">Section / Department Name</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Section or Department Name">
          </div>
          <div class="form-group col-md-6 col-sm-6">
           <div class="row">
                <div class="form-group col-md-6 col-sm-6">
                <label for="exampleInputEmail1">Floor Number</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Floor Number">
          </div>
          <div class="form-group col-md-6 col-sm-6">
            <label for="exampleInputEmail1">Room Number / Office Name</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Room Number">
          </div> 
          
          <!-- /.row -->
        </div>
          </div> 
          
        </div>
        <center><h4 class="box-title">Visitor's Details</h4></center> 
        <div class="row">
                <div class="form-group col-md-6 col-sm-6">
                <label for="exampleInputEmail1">Identification</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Identification">
          </div>
          <div class="form-group col-md-6 col-sm-6">
           <label for="exampleInputEmail1">Full Name</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Full Name">
          </div> 
          
        </div>
        <div class="row">
               <div class="form-group col-md-6 col-sm-6">
                <label for="exampleInputEmail1">Mobile Number</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Mobile Number">
          </div>
          <div class="form-group col-md-6 col-sm-6">
           <div class="row">
                <div class="form-group col-md-6 col-sm-6">
           <label for=""> Date / Time In</label>
                   <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker">
                </div>
          
          </div> 
          <div class="form-group col-md-6 col-sm-6">
            <label for="exampleInputEmail1">Token Number</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Token Number">
          </div> 
          
          <!-- /.row -->
        </div>
          </div> 
          
        </div>
        
        <div class="row">
                <div class="form-group col-md-6 col-sm-6">
                <label for="exampleInputEmail1">Purpose </label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter e.g Personal , Official">
          </div>
          <div class="form-group col-md-6 col-sm-6">
           <label for="exampleInputEmail1">Name of Person Seen</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Institution Name">
          </div> 
          
        </div>
         <div class="row">
                <div class="form-group col-md-6 col-sm-6">
                <label for="exampleInputEmail1">Clearing Officer Name</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Institution Name">
          </div>
          <div class="form-group col-md-6 col-sm-6">
           <div class="row">
                <div class="form-group col-md-6 col-sm-6">
           <label for=""> Date / Time In</label>
                   <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker">
                </div>
          
          </div> 
          <div class="form-group col-md-6 col-sm-6">
            <label class="control-label">Security Company Name</label>
                  <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">--select--</option>
                  <option >G4S</option>
                  <option>Wells Fargo</option>
                  <option>KK</option>
                </select>
          </div> 
          
          <!-- /.row -->
        </div>
          </div> 
          
        </div>
        <div class="form-group">
                  <label for="ammount">Means of Transport </label>
                  <label class="radio-inline"><input type="radio" name="optradio">No</label>
                    <label class="radio-inline"><input type="radio" name="optradio">Yes</label>

          </div>
        <center><h4 class="box-title">Transport Details</h4></center> 
        <div class="row">
                <div class="form-group col-md-6 col-sm-6">
                <label class="control-label">Transport Category</label>
             <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">--select--</option>
                  <option >Personal</option>
                  <option>Commercial</option>
                  <option>Cargo</option>
                </select>
               
          </div>
          <div class="form-group col-md-6 col-sm-6">
          <label class="control-label">Transport Type</label>
             <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">--select--</option>
                  <option >Car</option>
                  <option>Lorry</option>
                  <option>Bus</option>
                  <option>Bicycle</option>
                  <option>Motor-Cycle</option>
                  <option>Tractor</option>
                </select>
          </div> 
          
        </div>
        <div class="row">
                <div class="form-group col-md-6 col-sm-6">
                 <label for="exampleInputEmail1">Model</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Model Name">
          </div>
          <div class="form-group col-md-6 col-sm-6">
            <label for="exampleInputEmail1">Registration Number</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Registration Number">
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