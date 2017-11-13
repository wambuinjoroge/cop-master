
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
     Register Item
      </h1>
      <ol class="breadcrumb">
        <li ><a href="/member"><i class="fa fa-home"></i> Dashboard</a></li>
        
        <li class="active">Register Item</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
         <h3 class="box-title">Register Item</h3> 
    
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
             <div class="form-group">
          <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>Item Name</th>
        <th>Item Type</th>
        <th>Description</th>
        <th>Quantity</th>
        <th>Value</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Computer</td>
        <td>Electronic</td>
        <td>Hp , Black and SN9000134</td>
        <td>1</td>
        <td>Ksh.20,000/=</td>
        <td> <div class="col-sm-6">
     <a id="add_row" class="btn btn-success pull-left">Edit</a>
    </div></td>
      </tr>
     
    </tbody>
    </table>
    <div class="col-sm-6">
     <a id="add_row" class="btn btn-success pull-left">Add Item</a>
    </div>
     </div>
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