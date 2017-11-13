
@yield('content')
<!-- Main Header -->
  <header class="main-header">
     <!-- Logo -->
    <a href="/member" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>e</b>cp</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>ecp </b> Portal</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="forms/message.blade.php" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="{{ asset('assets/dist/img/user2-160x160.jpg') }}"  class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Mose
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="{{ asset('assets/dist/img/avatar.png') }}"  class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Pius Wanjiru
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="{{ asset('assets/dist/img/user1-128x128.jpg') }}"  class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Michael Langat
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="{{ asset('assets/dist/img/user4-128x128.jpg') }}"  class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Ongoya
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Attorney</p>
                    </a>
                  </li>
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="{{ asset('assets/dist/img/user2-160x160.jpg') }}"  class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Ashken
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Mobile app </p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
       
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              {{ Auth::user()->name  }}
              <span class="hidden-xs"></span>
            </a>
            <ul class="dropdown-menu">
               <!-- User image -->
              <li class="user-header" >
                <img src="{{ asset('assets/bootstrap/img/member.jpeg') }}" class="img-circle" alt="User Image">

                <p>
                  Welcome {{ Auth::user()->name  }}
                      <small>Member Since {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', Auth::user()->created_at)->format('l j F Y') }}</small>
                     
                    </p>

              </li>
              <!-- Menu Body -->
              <!--li class="user-body">
                <div class="row social-icons">
                  <div class="col-xs-6 text-center">
                      <a href="https://www.facebook.com/"><i class="fa fa-facebook fa-2"></i></a>
                  </div>
                  <div class="col-xs-6 text-center">
                    <a href="https://twitter.com/"><i class="fa fa-twitter fa-2"></i></a>
                  </div>
                </div>
              </li-->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="{{url('/account')}}" class="btn btn-default btn-flat">Account</a>
                </div>
                <div class="pull-right btn btn-default btn-flat">
                  <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>