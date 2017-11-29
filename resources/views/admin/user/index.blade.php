
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
        All Users
      </h1>
      <ol class="breadcrumb">
       <li><a href="/member"><i class="fa fa-home" ></i>Dashboard</a></li>
       <li class="active"><a href="/contacts"><i class="fa fa-book"></i>Contact List</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
         <center><h3 class="box-title">Registered Users</h3></center> 

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
      
            <a href="" class="btn btn-success btn-xs">New User</a><br>
    
          <table class="table table-responsive table-striped table-bordered">
            <thead>
              <th>User ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Role</th>
              <th>Joined On</th>
              <th>Action</th>
            </thead>
            <tbody>
              @forelse ($users as $user)
                  <td>{{ $user->id }}</td>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>
                    @foreach($user->roles as $role)
                      <span class="label label-info">{{ $role->name }}</span>
                    @endforeach
                  </td>
                  <td>{{ $user->created_at->format('Y-m-d') }}</td>
                  <td>
                    <a href="" class="">View</a> &nbsp;&nbsp;
                    <a href="" class="">Edit</a> &nbsp;&nbsp;
                    <a href="" class="">Delete</a> &nbsp;&nbsp;
                  </td>
              @empty
                  <td colspan="6" class="alert alert-warning">No users available</td>
              @endforelse
            </tbody>
          </table>
          {!! $users->links() !!}
      
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