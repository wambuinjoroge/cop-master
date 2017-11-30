
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
        Aftercare
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Case Details</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
    <center><h3 class="box-title">Case Information</h3> </center>     

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
        <div class="form-group">
                  <label for="">Refference Number</label>
                  <input type="names" class="form-control" id="exampleInputEmail1" placeholder="Enter  Refference Number">
                </div>
         <div class="row">
                               <div class="form-group col-md-6 col-sm-6">
            <label class="control-label">Charges</label>
            <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Charges"  />
          </div>
          <div class="form-group col-md-6 col-sm-6">
            <label class="control-label">Penal Code Setion</label>
            <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Penal Code Setion" />
          </div> 
                            </div>
                             <div class="row">
                               <div class="form-group col-md-6 col-sm-6">
            <label class="control-label">Court File No.</label>
            <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Court File No."  />
          </div>
          <div class="form-group col-md-6 col-sm-6">
            <label class="control-label">Court Name</label>
           <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">--select--</option>
                  <option >Kisii Law Court</option>
                  <option>Nyando Law Court</option>
                  <option>Kisumu Law Court</option>
                  <option>Nairobi Law Court</option>
                </select>
          </div> 
                            </div>
                            <div class="row">
                               <div class="form-group col-md-6 col-sm-6">
            <label class="control-label">Police Station File No.</label>
            <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Police Station File No."  />
          </div>
          <div class="form-group col-md-6 col-sm-6">
            <label class="control-label">Police Station Name</label>
           <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">--select--</option>
                   <option >Kisii Police Station</option>
                  <option>Nyando Police Station</option>
                  <option>Kisumu Police Station</option>
                  <option>Nairobi Police Station</option>
                </select>
          </div> 
                            </div>
                            <div class="form-row">
                <label>
                    <span>Previous Conviction (If Any)</span>
                    <label class="radio-inline"><input type="radio" name="optradio">Yes</label>
                    <label class="radio-inline"><input type="radio" name="optradio">No</label>
                    
                </label>
            </div>
            <div class="form-group">
                  <label for="">Previous Refference Number</label>
                  <input type="names" class="form-control" id="exampleInputEmail1" placeholder="Enter  Refference Number">
                </div>
                   <div class="row">
                               <div class="form-group col-md-6 col-sm-6">
            <label class="control-label">Court File No.</label>
            <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Court File No."  />
          </div>
          <div class="form-group col-md-6 col-sm-6">
            <label class="control-label">Court Name</label>
           <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">--select--</option>
                  <option >Kisii Law Court</option>
                  <option>Nyando Law Court</option>
                  <option>Kisumu Law Court</option>
                  <option>Nairobi Law Court</option>
                </select>
          </div> 
                            </div>
                            <div class="row">
                               <div class="form-group col-md-6 col-sm-6">
            <label class="control-label">Police Station File No.</label>
            <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Police Station File No."  />
          </div>
          <div class="form-group col-md-6 col-sm-6">
            <label class="control-label">Police Station Name</label>
           <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">--select--</option>
                   <option >Kisii Police Station</option>
                  <option>Nyando Police Station</option>
                  <option>Kisumu Police Station</option>
                  <option>Nairobi Police Station</option>
                </select>
          </div> 
                            </div>
                            <div class="row">
                               <div class="form-group col-md-6 col-sm-6">
            <label class="control-label">Mention Date:</label>
            <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker">
                </div>
          </div>
          <div class="form-group col-md-6 col-sm-6">
            <label class="control-label">Refferal Date:</label>
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
             <label class="control-label">Type of Plea</label>
           <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">--select--</option>
                   <option >Remanded</option>
                  <option>Bonded</option>
                  <option>Guilty</option>
                </select>
          </div>
          <div class="form-group col-md-6 col-sm-6">
            <label class="control-label">Offence Nature </label>
           <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">--select--</option>
                   <option >Petty Offence</option>
                  <option>Serious Offence</option>
                </select>
          </div> 
                            </div>
              <div class="form-group">
                  <label>Particular of Offence </label>
                  <textarea class="form-control" rows="3" placeholder="Enter Description"></textarea>
                </div>
                <div class="form-group">
                  <label>Circumstance of Offence </label>
                  <textarea class="form-control" rows="3" placeholder="Enter Description"></textarea>
                </div>
                <div class="form-group">
                  <label>Source of Information</label>
                  <textarea class="form-control" rows="3" placeholder="Enter Description"></textarea>
                </div>
             
               <div class="box-footer">
                <button class="btn btn-success btn-block" type="submit">Submit</button>
                
              </div>
          
          <!-- /.row -->
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