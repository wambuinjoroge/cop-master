
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
     Contribution
      </h1>
      <ol class="breadcrumb">
        <li ><a href="/member"><i class="fa fa-home"></i> Dashboard</a></li>
        <li class="active"> Contribution</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
         <center><h3 class="box-title">  Contribution</h3></center> 

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
      
        <div class="row">
                <div class="form-group col-md-6 col-sm-6">
                <label for="exampleInputEmail1">Institution Name</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Institution Name">
          </div>
          <div class="form-group col-md-6 col-sm-6">
            <label for="exampleInputEmail1">Branch Name</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Branch  Name">
          </div> 
          
          <!-- /.row -->
        </div>
          <div class="row">
                <div class="form-group col-md-6 col-sm-6">
                      <div class="form-group">
                <label>County</label>
                <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">--select--</option>
                  <option>BARINGO</option>
    <option>BOMET</option>
    <option>BUNGOMA</option>
    <option>BUSIA</option>
    <option>ELGEYO MARAKWET</option>
    <option>EMBU</option>
    <option>GARISSA</option>
    <option>HOMA BAY</option>
    <option>ISIOLO</option>
    <option>KAJIADO</option>
    <option>KAKAMEGA</option>
    <option>KERICHO</option>
    <option>KIAMBU</option>
    <option>KILIFI</option>
    <option>KIRINYAGA</option>
    <option>KISII</option>
    <option>KISUMU</option>
    <option>KITUI</option>
    <option>KWALE</option>
    <option>LAMU</option>
    <option>MACHAKOS</option>
    <option>MAKUENI</option>
    <option>MANDERA</option>
    <option>MERU</option>
    <option>MIGORI</option>
    <option>MARSABIT</option>
    <option>MOMBASA</option>
    <option>MURANG'A</option>
    <option>NAIROBI</option>
    <option>NAKURU</option>
    <option>NANDI</option>
    <option>NAROK</option>
    <option>NYAMIRA</option>
    <option>NYANDARUA</option>
    <option>NYERI</option>
    <option>SAMBURU</option>
    <option>SIAYA</option>
    <option>TAITA TAVETA</option>
    <option>TANA RIVER</option>
    <option>THARAKA NITHI</option>
    <option>TRANS NZOIA</option>
    <option>TURKANA</option>
    <option>UASIN GISHU</option>
    <option>VIHIGA</option>
    <option>WAJIR</option>
    <option>WEST POKOT</option>
                </select>
              </div>
          </div>
          <div class="form-group col-md-6 col-sm-6">
            <label>Category</label>
                <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">--select--</option>
                  <option >Suggestions </option>
                  <option>Complains </option>
                </select>
          </div> 
          
          <!-- /.row -->
        </div>
         <div class="row">
                <div class="form-group col-md-6 col-sm-6">
                <label for="exampleInputEmail1">Subject</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Subject Name">
          </div>
          <div class="form-group col-md-6 col-sm-6">
             <label>Description </label>
                  <textarea class="form-control" rows="3" placeholder="Enter Description"></textarea>
          </div> 
          
          <!-- /.row -->
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