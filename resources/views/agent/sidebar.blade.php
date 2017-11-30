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
          <a href="/agent">
            <i class="fa fa-home"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class=" treeview">
          <a href="/map">
            <i class="fa fa-map-pin"></i> <span>Alarm Map</span>
            
          </a>
        </li>
         <li>
          <a href="/contacts">
           <i class="fa fa-book"></i> <span>Contact Directory</span>
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
            <li><a href="/pass">Visitor Pass</a></li>
            <li><a href="/courier">Courier</a></li>
            <li><a href="#">Security</a></li>  
          </ul>
        </li>   
              
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>