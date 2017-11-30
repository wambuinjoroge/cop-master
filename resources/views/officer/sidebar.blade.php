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
          <a href="/officer">
            <i class="fa fa-home"></i> <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="/offender">
           <i class="fa fa-book"></i> <span>Offender List</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li>
           <li class="treeview">
          <a href="#">
            <i class="fa fa-desktop"></i> <span>Programs</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
             <li><a href="/aftercare"><i class="fa fa-power-off"></i>Aftercare</a></li>
             <li><a href="/probation"><i class="fa fa-power-off"></i>Probation / CSO</a></li>
             <li><a href="/bail"><i class="fa fa-power-off"></i>Pre-Bail</a></li>
          </ul>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa  fa-database"></i> <span>Cases</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
             <li><a href="/completion"><i class="fa  fa-folder-open-o"></i> Completion</a></li>
             <li><a href="/sentence"><i class="fa  fa-folder-open-o"></i> Sentence</a></li>
              <li><a href="/supervision"><i class="fa  fa-folder-open-o"></i>Supervision</a></li>
               <li><a href="/intervention"><i class="fa  fa-folder-open-o"></i>Intervention</a></li>
                <li><a href="/transfer"><i class="fa  fa-folder-open-o"></i> Transfer</a></li>
          </ul>
        </li>
      
              
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>