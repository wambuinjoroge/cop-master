
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
     Courier 
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Dashboard</a></li>
        
        <li class="active">Courier </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
         <center><h3 class="box-title">Shipment Form</h3></center> 

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
        <center><h4 class="box-title">Sender Details</h4></center> 
        
        <div class="row">
                <div class="form-group col-md-6 col-sm-6">
                <label for="exampleInputEmail1">Identification</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter ID or  Passport No.">
          </div>
          <div class="form-group col-md-6 col-sm-6">
           <label for="exampleInputEmail1">Full Name</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Full Name">
          </div> 
          
        </div>
        <div class="row">
                <div class="form-group col-md-6 col-sm-6">
                <label for="exampleInputEmail1">Mobile Number</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Mobile Name">
          </div>
          <div class="form-group col-md-6 col-sm-6">
           <div class="row">
                <div class="form-group col-md-6 col-sm-6">
                <label for=""> Date</label>
                   <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker">
                </div>
          </div>
          <div class="form-group col-md-6 col-sm-6">
            <label for="exampleInputEmail1">Time</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Time">
          </div> 
          
          <!-- /.row -->
        </div>
          </div> 
          
        </div>
        <div class="row">
                <div class="form-group col-md-6 col-sm-6">
                <label for="Remarks">Postal Address </label>
                   <textarea required="required" class="form-control" placeholder="Physical Address" ></textarea>
          </div>
          <div class="form-group col-md-6 col-sm-6">
           <label for="Remarks">Remarks </label>
                   <textarea required="required" class="form-control" placeholder="Special Remarks" ></textarea>
          </div> 
          
        </div>

        <center><h4 class="box-title">Recipient Details</h4></center> 
          <div class="form-group">
                  <label for="ammount">Type</label>
                  <label class="radio-inline"><input type="radio" name="optradio">Personal</label>
                  <label class="radio-inline"><input type="radio" name="optradio">Institution</label>
          </div>
        <div class="row">
               
          <div class="form-group col-md-6 col-sm-6">
           <label for="exampleInputEmail1">Name</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Full Name">
          </div> 
           <div class="form-group col-md-6 col-sm-6">
                <label for="exampleInputEmail1">Contact Person</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Contact Person">
          </div>
        </div>
        <div class="row">
                <div class="form-group col-md-6 col-sm-6">
                <label for="exampleInputEmail1">Telephone Number</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Telephone  Name">
          </div>
          <div class="form-group col-md-6 col-sm-6">
            <label for="Remarks">Postal Address</label>
                   <textarea required="required" class="form-control" placeholder="Physical Address" ></textarea>
          </div> 
          
        </div>
       
        <div class="form-group">
                  <label for="ammount">Payment Method</label>
                  <label class="radio-inline"><input type="radio" name="optradio">Cash</label>
                  <label class="radio-inline"><input type="radio" name="optradio">Mobile Money</label>
                  <label class="radio-inline"><input type="radio" name="optradio">Card</label>
                   <label class="radio-inline"><input type="radio" name="optradio">Others</label>

          </div>
        <center><h4 class="box-title">Shipment Details</h4></center> 
        <div class="row">
                <div class="form-group col-md-5 col-sm-6">
                <label class="control-label">Shipment Type</label>
             <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">--select--</option>
                  <option >Parcel</option>
                  <option>Cover</option>
                  <option>Mailbag</option>
                </select>
               
          </div>
          <div class="form-group col-md-7 col-sm-6">
          <label for="ammount">Service Type</label>
                  <label class="radio-inline"><input type="radio" name="optradio">Express</label>
                  <label class="radio-inline"><input type="radio" name="optradio">Dedicated</label>
                  <label class="radio-inline"><input type="radio" name="optradio">Same Day</label>
                   <label class="radio-inline"><input type="radio" name="optradio">Export</label>
                    <label class="radio-inline"><input type="radio" name="optradio">Others</label>
          </div> 
          
        </div>
         <div class="form-group">
          <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th class="text-center">Type</th>
        <th class="text-center">Number</th>
        <th class="text-center">Quantity</th>
        <th class="text-center">Weight (Kgs)</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="text-center">Parcel</td>
        <td class="text-center">1</td>
        <td class="text-center">1</td>
        <td class="text-center">1</td>
      </tr>
    </tbody>
    </table>
       <a id="add_row" class="btn btn-success pull-left">Add</a><a id='delete_row' class="btn btn-danger pull-right">Delete </a>
    
     </div>
    </div>
       
        <div class="box-footer">
                 <a id="add_row" class="btn btn-success pull-left">Submit</a><a id="add_row" class="btn btn-primary pull-left">Edit</a><a id='delete_row' class="btn btn-danger pull-right">Exit</a>
              </div>
       
      </div>
      <!-- /.box -->


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

    <!-- Footer -->
    @include('layouts.footer')
   
    
</div><!-- ./wrapper -->
@include('includes.js')
@yield('js')

</body>
</html>