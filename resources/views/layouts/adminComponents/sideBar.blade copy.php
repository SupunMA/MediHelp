<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin.home')}}" class="brand-link">
        <img src="https://media.istockphoto.com/id/1145254708/vector/portable-swimming-pool-vector-icon-illustration.jpg?s=612x612&w=0&k=20&c=lmIkgqOrzddXYqGZwWgClceUT5ZDK11MjKKarmXm90U="
            alt="Logo" class="brand-image img-circle elevation-3" style="opacity: 1">
        <span class="brand-text font-weight-light">Admin Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="https://icon-library.com/images/admin-user-icon/admin-user-icon-4.jpg"
                    class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        {{-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> --}}
        
        
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->
                <li class="nav-item">
                  <a href="{{ route('admin.home') }}" class="nav-link {{ Route::currentRouteNamed('admin.home') ? 'active' : ' ' }}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                      <p>Dashboard
                          <span class="right badge badge-danger">Live</span>
                      </p>
                  </a>
                </li>

                {{-- Transactions --}}
                <li class="nav-item">
                    <a href="{{ route('admin.allTimeTable') }}" class="nav-link {{ Route::currentRouteNamed('admin.allTimeTable') ? 'active' : ' ' }}">
                        <i class="fa-solid fa-hourglass-start"></i>
                        <p>Timetable
                        </p>
                    </a>
                  </li>
                

                  <li class="nav-item {{ Route::currentRouteNamed('admin.pendingPaymentList') || Route::currentRouteNamed('admin.approvedPayment') || Route::currentRouteNamed('admin.DeclinedPayment') || Route::currentRouteNamed('admin.currentMonthTable')? 'menu-open' : 'menu-close' }}">
                    <a href="#" class="nav-link {{ Route::currentRouteNamed('admin.pendingPaymentList') || Route::currentRouteNamed('admin.approvedPayment') || Route::currentRouteNamed('admin.DeclinedPayment') || Route::currentRouteNamed('admin.currentMonthTable') ? 'active' : '' }} ">
                        <i class="fas fa-money-bill-wave"></i>
                        <p>
                            Payments
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.currentMonthTable') }}" class="nav-link {{ Route::currentRouteNamed('admin.currentMonthTable') ? 'active' : '' }} ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Current Month</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.pendingPaymentList') }}" class="nav-link {{ Route::currentRouteNamed('admin.pendingPaymentList') ? 'active' : '' }} ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pending List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.approvedPayment') }}" class="nav-link {{ Route::currentRouteNamed('admin.approvedPayment') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Approved List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.DeclinedPayment') }}" class="nav-link {{ Route::currentRouteNamed('admin.DeclinedPayment') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Declined List</p>
                            </a>
                        </li>
                    </ul>
                </li>


                    {{-- Clients --}}
                <li class="nav-item {{ Route::currentRouteNamed('admin.addClient') || Route::currentRouteNamed('admin.allClient') ? 'menu-open' : 'menu-close' }}">
                    <a href="#" class="nav-link {{ Route::currentRouteNamed('admin.addClient') || Route::currentRouteNamed('admin.allClient') ? 'active' : '' }} ">
                      <i class="fas fa-users"></i>
                        <p>
                            Customers
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.addClient') }}" class="nav-link {{ Route::currentRouteNamed('admin.addClient') ? 'active' : '' }} ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Register New Customer</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.allClient') }}" class="nav-link {{ Route::currentRouteNamed('admin.allClient') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Customers</p>
                            </a>
                        </li>
                    </ul>
                </li>


                    {{-- Lands --}}

                <li class="nav-item {{ Route::currentRouteNamed('admin.addPlan') || Route::currentRouteNamed('admin.allPlan') ? 'menu-open' : 'menu-close' }}">
                    <a href="#" class="nav-link {{ Route::currentRouteNamed('admin.addPlan') || Route::currentRouteNamed('admin.allPlan') ? 'active' : '' }}">
                        <i class="fas fa-house-user"></i>
                        <p>
                            Plans
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                          <a href="{{ route('admin.addPlan') }}" class="nav-link {{ Route::currentRouteNamed('admin.addPlan') ? 'active' : '' }}">
                              <i class="far fa-circle nav-icon"></i>
                              <p> Add New Plan</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="{{ route('admin.allPlan') }}" class="nav-link {{ Route::currentRouteNamed('admin.allPlan') ? 'active' : '' }}">
                              <i class="far fa-circle nav-icon"></i>
                              <p> All Plans</p>
                          </a>
                      </li>
                    </ul>
                </li>


                {{-- Loans --}}

            <li class="nav-item {{ Route::currentRouteNamed('admin.addStaff') || Route::currentRouteNamed('admin.allStaff') ? 'menu-open' : 'menu-close' }}">
                <a href="#" class="nav-link {{ Route::currentRouteNamed('admin.addStaff') || Route::currentRouteNamed('admin.allStaff') ? 'active' : '' }}">
                    <i class="far fa-handshake"></i>
                    <p>
                        Staff
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin.addStaff') }}" class="nav-link {{ Route::currentRouteNamed('admin.addStaff') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p> Add New Staff Member</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.allStaff') }}" class="nav-link {{ Route::currentRouteNamed('admin.allStaff') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p> All Staff</p>
                        </a>
                    </li>
                </ul>
            </li>

                <li class="nav-item">
                    <a href="{{ route('admin.allRatings') }}" class="nav-link {{ Route::currentRouteNamed('admin.allRatings') ? 'active' : '' }}">
                        <i class="fas fa-vote-yea"></i>
                        <p>
                            Coaches Ratings
                            <span class="right badge badge-danger">&#9733;</span>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('StaffProfileUpdate') }}" class="nav-link {{ Route::currentRouteNamed('StaffProfileUpdate') ? 'active' : '' }}">
                        <i class="fas fa-university"></i>
                        <p>
                            Profile
                            <span class="right badge badge-warning">Update</span>
                        </p>
                    </a>
                </li>

                {{-- Logout --}}
                <li class="nav-item">
                    <!-- Logout modal trigger Button -->
                    <a href="#" class="nav-link btn btn-danger" data-toggle="modal" data-target="#staticBackdrop">                
                    <i class="fas fa-sign-out-alt"></i>
                        <p>Logout</p>
                    </a>                         
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>





{{-- v2 admin --}}

<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
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

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="#"><i class="fa fa-link"></i> <span>Link</span></a></li>
        <li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Link in level 2</a></li>
            <li><a href="#">Link in level 2</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>