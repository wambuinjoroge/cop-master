
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
        Change {{ $user->name }}'s Role'
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
         <center><h3 class="box-title">{{ $user->name }}'s Role Details</h3></center> 

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
      
          <div class="row">
            <div class="col-sm-12">
              <form action="{{ route('user.role.change', $user->id) }}" method="POST" >

                  {{ csrf_field() }}

                  <div class="form-group">
                      <label for="roles">Roles</label>
                          @foreach($roles->chunk(3) as $chunk)
                              <div class="row">
                                  @foreach($chunk as $role)
                                      <div class="col-xs-4">
                                         <input type="checkbox" {{ in_array($role->id,$user_roles)?"checked":"" }} name="roles[]" value="{{ $role->id }}"> {{ $role->name }} <br> 
                                      </div>
                                  @endforeach
                              </div>
                          @endforeach    
                  </div>
                  <div>
                      <!-- <button type="submit" class="btn btn-sm btn-block btn-primary pull-right">Update</button> -->
                      <button type="submit" class="btn btn-primary">Update</button>
                  </div>
              </form>
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