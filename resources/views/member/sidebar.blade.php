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
          <a href="/member">
            <i class="fa fa-home"></i> <span>Dashboard</span>
          </a>
        </li>
      
        
       
        <li>
          <a href="/contacts">
           <i class="fa fa-book"></i> <span>Contact Directory</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li>
        <li>
          <a href="/item">
           <i class="fa fa-bars"></i><span>Register Item</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li>
         <li>
          <a href="#">
           <i class="fa fa-users"></i><span>Household</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li>
         <li>
          <a href="/contribution">
            <i class="fa fa-briefcase"></i> <span>Suggestion Box</span>
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