<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
                <a href="{{url('/home')}}">
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
                    <li><a href="{{url('/contacts')}}">Contacts</a></li>
                    <!-- search form -->
                    <form action="{{url('/contacts')}}" method="POST" class="sidebar-form">
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
                <a href="{{url('/help')}}">
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