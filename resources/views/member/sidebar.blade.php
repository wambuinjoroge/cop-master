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
          <a href="#">
           <i class="fa fa-envelope-o"></i> <span>Messages</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li>
        <li>
          <a href="#">
           <i class="fa fa-shopping-cart"></i> <span>Report</span>
            <span class="pull-right-container">
              
            </span>
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
            <!--li><a href="#">Bursary</a></li>
            <li><a href="#">Burial Permit</a></li>
            <li><a href="#">CDF</a></li>
            <li><a href="#">Conflict Resolution</a></li-->
            <li><a href="/event">Event Permit</a></li>
            <li><a href="#">Reference Letter</a></li>
            <!--li><a href="#">Witness Protection</a></li>
            <!--li><a href="#">Private Security Service</a></li-->
          </ul>
        </li>
         <li>
          <a href="#">
           <i class="fa fa-shopping-cart"></i> <span>Appeal</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li>
         <li class="treeview">
          <a href="#">
          <i class="fa fa-calendar-check-o"></i> <span>Calender</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li><a href="/reminder">  <i class="fa fa-clock-o"></i>  Reminder</a>
         
            
          </ul>
        </li>
        <li>
          <a href="/contacts">
           <i class="fa fa-book"></i> <span>Contact Directory</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li>
         <li>
          <a href="/contribution">
            <i class="fa fa-briefcase"></i> <span>Contributions</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li>
         <li>
          <a href="#">
          <i class="fa fa-calendar"></i> <span>Events</span>
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
          <a href="#">
           <i class="fa fa-bullhorn"></i><span>Notices</span>
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
          <a href="/item">
           <i class="fa fa-bars"></i><span>Register Item</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li>
        
          <li>
          <a href="#">
            <i class="fa fa-road"></i> <span>Black / Crime Spots</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li>
           <!--li>
          <a href="#">
            <i class="glyphicon glyphicon-question-sign"></i><span>Sports Betting</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li-->
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