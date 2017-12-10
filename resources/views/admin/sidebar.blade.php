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
                <!--li><a href="#"><i class="fa fa-unlock"></i>Permissions</a></li-->
                <li><a href="{{ route('roles.index') }}"><i class="fa fa-cog"></i>Roles</a></li>
                <li><a href="/admin/user"><i class="fa fa-user-plus"></i>Users</a></li>

             
          </ul>
        </li>
         <li>
          <a href="#">
           <i class="fa fa-key"></i><span>Change Password</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-building-o"></i> <span>County </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           
             <li><a href="/county"><i class="fa fa-building-o"></i>County</a></li>
             <li><a href="/subcounty"><i class="fa fa-building-o"></i>Sub County</a></li>
             <li><a href="/constituency"><i class="fa fa-building-o"></i>Constituency</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-building-o"></i> <span>Courts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           
             <li><a href="/courts"><i class="fa fa-building-o"></i> Add Court</a></li>
          </ul>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-building-o"></i> <span>Probation Office</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           
             <li><a href="#"><i class="fa fa-building-o"></i> Add Office</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="/stations">
            <i class="fa fa-building-o"></i> <span>Police Stations</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          
             <li><a href="/stations"><i class="fa fa-building-o"></i> Add Station</a></li>
          </ul>
        </li>   
         <li class="treeview">
          <a href="#">
            <i class="fa fa-building-o"></i> <span>Agencies</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           
             <li><a href="/agencies"><i class="fa fa-building-o"></i> Agencies</a></li>
          </ul>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-building-o"></i> <span>Security Company</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           
             <li><a href="/company"><i class="fa fa-building-o"></i>Company</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa  fa-exclamation"></i> <span>Invalid Logins</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            
          </ul>
        </li>
        
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>