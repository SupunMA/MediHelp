


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

        <li class="{{ Route::currentRouteNamed('admin.home') ? 'active' : ' ' }}"><a href="{{ route('admin.home') }}"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
        <li class="{{ Route::currentRouteNamed('admin.allTimeTable') ? 'active' : ' ' }}"><a href="{{ route('admin.allTimeTable') }}"><i class="fa fa-tachometer"></i> <span>Timetable</span></a></li>
        


        <li class="treeview {{ Route::currentRouteNamed('admin.pendingPaymentList') || Route::currentRouteNamed('admin.approvedPayment') || Route::currentRouteNamed('admin.DeclinedPayment') || Route::currentRouteNamed('admin.currentMonthTable')? 'active' : '' }}">
          <a href="#"><i class="fa fa-link"></i> <span>Payments</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ Route::currentRouteNamed('admin.currentMonthTable') ? 'active' : '' }}"><a href="{{ route('admin.currentMonthTable') }}">Current Month</a></li>
            <li class="{{ Route::currentRouteNamed('admin.pendingPaymentList') ? 'active' : '' }}"><a href="{{ route('admin.pendingPaymentList') }}">Pending List</a></li>
            <li class="{{ Route::currentRouteNamed('admin.approvedPayment') ? 'active' : '' }}"><a href="{{ route('admin.approvedPayment') }}">Approved List</a></li>
            <li class="{{ Route::currentRouteNamed('admin.DeclinedPayment') ? 'active' : '' }}"><a href="{{ route('admin.DeclinedPayment') }}">Declined List</a></li>
          </ul>
        </li> 



        <li class="treeview {{ Route::currentRouteNamed('admin.addClient') || Route::currentRouteNamed('admin.allClient') ? 'active' : '' }}">
          <a href="#"><i class="fa fa-link"></i> <span>Customers</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ Route::currentRouteNamed('admin.addClient') ? 'active' : '' }}"><a href="{{ route('admin.addClient') }}">Register New Customer</a></li>
            <li class="{{ Route::currentRouteNamed('admin.allClient') ? 'active' : '' }}"><a href="{{ route('admin.allClient') }}">All Customers</a></li>
            
          </ul>
        </li> 
       

        
        <li class="treeview {{ Route::currentRouteNamed('admin.addPlan') || Route::currentRouteNamed('admin.allPlan') ? 'active' : '' }}">
          <a href="#"><i class="fa fa-link"></i> <span>Plans</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ Route::currentRouteNamed('admin.addPlan') ? 'active' : '' }}"><a href="{{ route('admin.addPlan') }}">Add New Plan</a></li>
            <li class="{{ Route::currentRouteNamed('admin.allPlan') ? 'active' : '' }}"><a href="{{ route('admin.allPlan') }}">All Plans</a></li>
            
          </ul>
        </li> 




        <li class="treeview {{ Route::currentRouteNamed('admin.addStaff') || Route::currentRouteNamed('admin.allStaff') ? 'active' : '' }}">
          <a href="#"><i class="fa fa-link"></i> <span>Staff</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ Route::currentRouteNamed('admin.addStaff') ? 'active' : '' }}"><a href="{{ route('admin.addStaff') }}">Add New Staff Member</a></li>
            <li class="{{ Route::currentRouteNamed('admin.allStaff') ? 'active' : '' }}"><a href="{{ route('admin.allStaff') }}">All Staff</a></li>
            
          </ul>
        </li> 





        <li class="{{ Route::currentRouteNamed('StaffProfileUpdate') ? 'active' : '' }}"><a href="{{ route('StaffProfileUpdate') }}"><i class="fa fa-tachometer"></i> <span>Profile
          <span class="right badge badge-warning">Update</span></span></a></li>
          
       

      {{-- Logout --}}
      <li>
          <!-- Logout modal trigger Button -->
          <a href="#" class="nav-link btn btn-primary btn-lg" data-toggle="modal" data-target="#staticBackdrop">                
          <span>Logout</span>
          </a>                         
      </li>
       











        {{-- <li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li>--}}
        {{-- <li class="treeview active">
          <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="#">Link in level 2</a></li>
            <li><a href="#">Link in level 2</a></li>
          </ul>
        </li>  --}}
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>