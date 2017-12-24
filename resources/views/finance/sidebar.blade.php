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
          <a href="/finance">
            <i class="fa fa-home"></i> <span>Dashboard</span>
          </a>
        </li>
         <li>
          <a href="#">
           <i class="fa fa-envelope-o"></i> <span>Messages</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li>
         <li>
          <a href="#">
           <i class="fa fa-shopping-cart"></i> <span>Billing</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Services</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <!--li><a href="#">Business Permit</a></li-->
            <li><a href="#">Parking</a></li>
            <li><a href="#">Market Fee</a></li>
            <li><a href="#">CESS</a></li>
            <li><a href="#">Land Rate</a></li>
            <li><a href="#">County Houses</a></li>
          </ul>
        </li>
         <li>
          <a href="#">
           <i class="fa fa-shopping-cart"></i> <span>Report</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li>
        <li>
          <a href="#">
          <i class="glyphicon glyphicon-cog"></i> <span>Account Settings</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li>
          </ul>
    </section>
    <!-- /.sidebar -->
</aside>