
<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{URL::asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/assets/font-awesome-4.5.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/assets/ionicons-2.0.1/css/ionicons.css')}}">
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet">
     <!-- Ionicons -->
    <link rel="stylesheet" href="{{ URL::asset('assets/ionicons-2.0.1/css/ionicons.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ URL::asset('assets/dist/css/AdminLTE.min.css') }}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ URL::asset('assets/dist/css/skins/_all-skins.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ URL::asset('assets/plugins/iCheck/flat/blue.css') }}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{ URL::asset('assets/plugins/morris/morris.css') }}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{ URL::asset('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{ URL::asset('assets/plugins/datepicker/datepicker3.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ URL::asset('assets/plugins/daterangepicker/daterangepicker-bs3.css') }}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{ URL::asset('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/plugins/datatables/dataTables.bootstrap.css') }}">
   <!-- Theme CSS -->
    <!--link href="assets/css/agency.min.css" rel="stylesheet"-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        ECP
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="/login">Login</a></li>
                            <li><a href="/register">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        @if(!Auth::guest())
        <div class="row">
            <div class="col-md-offset-1 col-md-2">
             <!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="header">MAIN NAVIGATION</li>
          <li class="active treeview">
          <a href="/home">
            <i class="fa fa-home"></i> <span>Dashboard</span>
          </a>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Applications</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <!--li><a href="#">Bursary</a></li-->
            <li><a href="#">Burial Permit</a></li>
            <!--li><a href="#">CDF</a></li-->
            <li><a href="#">Conflict Resolution</a></li>
            <li><a href="#">Event Permit</a></li>
            <li><a href="#">Witness Protection</a></li>
            <!--li><a href="#">Private Security Service</a></li-->
          </ul>
        </li>
         <li class="treeview">
          <a href="#">
          <i class="fa fa-calendar-check-o"></i> <span>Calender</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li><a href="forms/reminder.blade.php">  <i class="fa fa-clock-o"></i>  Reminder</a>
          <li><a href="forms/contact.blade.php">  <i class="fa fa-tablet"></i>  Diary  Book</a>
            
          </ul>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-laptop"></i> <span>Logs</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-bullhorn"></i><span>Notices</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-calendar"></i> <span>Events</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
           
          </ul>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i> <span>Contact Directory</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li><a href="/contacts">Contacts</a></li>
            <!-- search form -->
            <form action="/contacts" method="POST" class="sidebar-form">
                {{csrf_field()}}
                <div class="input-group">
                    <input type="text" name="search" id="search" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
                       
                    </span>
                </div>
            </form>
            <!-- /.search form -->
            
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-shopping-cart"></i> <span>Appeal</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
            <li><a href="forms/appeal.blade.php">Make Appeal</a></li>
           
            
          </ul>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-share-alt"></i> <span>Lost & Found</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
         
           <li><a href="#">Item</a></li>
            <li><a href="#">Missing Person</a></li>
            <li><a href="#">Most Wanted</a></li>
           
            
          </ul>
        </li>
        <li>
          <a href="#">
           <i class="fa fa-bars"></i><span>Register Item</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li>
         <li>
          <a href="forms/contribution.blade.php">
            <i class="fa fa-briefcase"></i> <span>Contributions</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-road"></i> <span>Black / Crime Spots</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
           
          </ul>
        </li>
         <li>
          <a href="/help">
            <i class="glyphicon glyphicon-question-sign"></i>  <span>Help</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li>
        <!--li>
          <a href="#">
          <i class="glyphicon glyphicon-cog"></i> <span>Account Settings</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li-->
         
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
        </div>
       
        @endif
        <div class="col-md-8">
            @yield('content')
        </div>
        </div>

        

    <!--footer-->
    <footer class="main-footer footer navbar-fixed-bottom">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
            <b>Version</b> 1.0.0
        </div>
        <strong>Copyright &copy; <?=date('Y');?>
            <a href="#">Machini Technologies</a>. 
        </strong> All Rights Reserved.                    
    </footer>

    <!-- Scripts -->
    <script src="{{ URL::asset('/assets/js/app.js') }}"></script>
    <script src=" {{ URL::asset('/assets/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
    <script src=" {{ URL::asset('/assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/raphael/raphael-min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/morris/morris.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ URL::asset('assets/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
    <!-- jvectormap -->
    <script src="{{ URL::asset('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ URL::asset('assets/plugins/knob/jquery.knob.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ URL::asset('assets/plugins/moment/moment.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- datepicker -->
    <script src="{{ URL::asset('assets/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{ URL::asset('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
    <!-- Slimscroll -->
    <script src="{{ URL::asset('assets/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ URL::asset('assets/plugins/fastclick/fastclick.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ URL::asset('assets/dist/js/app.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/iCheck/icheck.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('assets/dist/js/demo.js') }}"></script>
</body>
</html>