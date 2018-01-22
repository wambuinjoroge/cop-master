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
          <a href="/reminder">
            <i class="fa fa-clock-o"></i> <span>Reminder</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-laptop"></i> <span>Logs</span>
            <span class="pull-right-container">
              
            </span>
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
          <a href="#">
          <i class="fa fa-calendar-check-o"></i> <span>Events</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li>
         <li>
          <a href="#">
           <i class="fa fa-bullhorn"></i><span>Notices </span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li>
         <li>
          <a href="#">
           <i class="fa fa-shopping-cart"></i><span>Medical Appeal</span>
            <span class="pull-right-container">
              
            </span>
          </a>
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
          <a href="/contribution">
            <i class="fa fa-briefcase"></i> <span>Suggestion Box</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
          <i class="fa fa-cc-mastercard"></i> <span>Payments</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li><a href="#">  <i class="fa fa-credit-card"></i>Transactions</a>
         
            
          </ul>
        </li>
         <li>
          <a href="#">
            <i class="fa fa-road"></i> <span>Black / Crime Spots</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li>
        <li>
          <a href="#">
          <i class="fa fa-volume-up"></i>Advertisement <span></span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li>
          </ul>
    </section>
    <!-- /.sidebar -->
</aside>