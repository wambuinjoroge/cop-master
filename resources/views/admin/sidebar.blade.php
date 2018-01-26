@extends('partials.topbar')
@yield('content')
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
         <li class="header">MAIN NAVIGATION</li>
          <li class="active treeview">
          <a href="/admin">
            <i class="fa fa-home"></i> <span>Dashboard</span>
          </a>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-group"></i> <span>User Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              
                <li><a href="{{ route('roles.index') }}"><i class="fa fa-cog"></i>Roles</a></li>
                <li><a href="/admin/user"><i class="fa fa-user-plus"></i>Users</a></li>

             
          </ul>
        </li>
         <li>
          <a href="#">
           <i class="fa fa-unlock"></i><span>Invalid Logins</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li>
        <li>
          <a href="#">
           <i class="fa fa-key"></i><span>Change Password</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li>
        
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>