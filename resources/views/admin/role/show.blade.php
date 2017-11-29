
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
        View Role
      </h1>
      <ol class="breadcrumb">
       <li><a href="/member"><i class="fa fa-home" ></i>Dashboard</a></li>
       <li class="active"><a href="#"><i class="fa fa-book"></i>Roles</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
         <center><h3 class="box-title">{{ $role->name }} role</h3></center> 

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
      
            @include('alerts/alerts')
            <div class="row">
              <div class="col-xs-12">
                <strong>Name: </strong> {{ $role->name }} <br>
                <strong>Users with this role: </strong> {{ count($role->users) }} <br>
                <strong>Permissions: </strong>
                @foreach($role->permissions as $permission)
                  <span class="label label-default">{{ $permission->name }}</span>
                @endforeach
              </div>
            </div>
            <br><br>

            <h4>Users with this role</h4>
            <div class="row">
              <div class="col-xs-12">
                <table class="table-bordered table table-striped table-responsive">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>ID/Passport</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Mobile Number</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if(count($role->users) > 0)
                      @foreach($role->users as $user)
                        <tr>
                          <td>{{ $user->id }}</td>
                          <td>{{ $user->id_no }}</td>
                          <td>{{ $user->name }}</td>
                          <td>{{ $user->email }}</td>
                          <td>{{ $user->mobile_number }}</td>
                        </tr>
                      @endforeach
                    @else
                      <tr>
                        <td colspan="5" class="alert alert-warning text-center">No users are available for this role</td>
                      </tr>
                    @endif
                  </tbody>
                </table>
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