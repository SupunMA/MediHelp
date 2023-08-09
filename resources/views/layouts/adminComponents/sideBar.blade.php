
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
          <p>{{ Auth::user()->name }}</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      {{-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form> --}}
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu List</li>
        <!-- Optionally, you can add icons to the links -->

        <li class="{{ Route::currentRouteNamed('admin.home') ? 'active' : ' ' }}"><a href="{{ route('admin.home') }}"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
        <li class="{{ Route::currentRouteNamed('admin.allTimeTable') ? 'active' : ' ' }}"><a href="{{ route('admin.allTimeTable') }}" class="bt btn-danger"><i class="fa fa-tachometer"></i> <span>Timetable</span></a></li>
        


        <li class="treeview {{ Route::currentRouteNamed('admin.addPatient') || Route::currentRouteNamed('admin.allPatient')? 'active' : '' }}">
          <a href="#"><i class="fa fa-users" aria-hidden="true"></i> <span>Patients</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ Route::currentRouteNamed('admin.addPatient') ? 'active' : '' }}"><a href="{{ route('admin.addPatient') }}">Register Patients</a></li>
            <li class="{{ Route::currentRouteNamed('admin.allPatient') ? 'active' : '' }}"><a href="{{ route('admin.allPatient') }}">All Patients</a></li>
            {{-- <li class="{{ Route::currentRouteNamed('admin.approvedPayment') ? 'active' : '' }}"><a href="{{ route('admin.approvedPayment') }}">Approved List</a></li>
            <li class="{{ Route::currentRouteNamed('admin.DeclinedPayment') ? 'active' : '' }}"><a href="{{ route('admin.DeclinedPayment') }}">Declined List</a></li> --}}
          </ul>
        </li> 



        <li class="treeview {{ Route::currentRouteNamed('admin.addDoctor') || Route::currentRouteNamed('admin.allDoctor') ? 'active' : '' }}">
          <a href="#"><i class="fa fa-user-md" aria-hidden="true"></i> <span>Doctors</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ Route::currentRouteNamed('admin.addDoctor') ? 'active' : '' }}"><a href="{{ route('admin.addDoctor') }}">Register Doctor</a></li>
            <li class="{{ Route::currentRouteNamed('admin.allDoctor') ? 'active' : '' }}"><a href="{{ route('admin.allDoctor') }}">All Doctors</a></li>
            
          </ul>
        </li> 
       

        
        <li class="treeview {{ Route::currentRouteNamed('admin.addPlan') || Route::currentRouteNamed('admin.allPlan') ? 'active' : '' }}">
          <a href="#"><i class="fa fa-link"></i> <span>Request Test</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ Route::currentRouteNamed('admin.addPlan') ? 'active' : '' }}"><a href="{{ route('admin.addPlan') }}">Add New Test</a></li>
            <li class="{{ Route::currentRouteNamed('admin.allPlan') ? 'active' : '' }}"><a href="{{ route('admin.allPlan') }}">All Tests</a></li>
            
          </ul>
        </li>
        

        <li class="treeview {{ Route::currentRouteNamed('admin.addPlan') || Route::currentRouteNamed('admin.allPlan') ? 'active' : '' }}">
          <a href="#"><i class="fa fa-link"></i> <span>Reports</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ Route::currentRouteNamed('admin.addPlan') ? 'active' : '' }}"><a href="{{ route('admin.addPlan') }}">Add Report</a></li>
            <li class="{{ Route::currentRouteNamed('admin.allPlan') ? 'active' : '' }}"><a href="{{ route('admin.allPlan') }}">All Reports</a></li>
            
          </ul>
        </li>
        


        <li class="treeview {{ Route::currentRouteNamed('admin.addPlan') || Route::currentRouteNamed('admin.allPlan') ? 'active' : '' }}">
          <a href="#"><i class="fa fa-link"></i> <span>Payments</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ Route::currentRouteNamed('admin.addPlan') ? 'active' : '' }}"><a href="{{ route('admin.addPlan') }}">Add Payment</a></li>
            <li class="{{ Route::currentRouteNamed('admin.allPlan') ? 'active' : '' }}"><a href="{{ route('admin.allPlan') }}">All Payment</a></li>
            
          </ul>
        </li>


        <li class="treeview {{ Route::currentRouteNamed('admin.addAvailableTest') || Route::currentRouteNamed('admin.allAvailableTest') ? 'active' : '' }}">
          <a href="#"><i class="fa fa-list-ol" aria-hidden="true"></i> <span>Available Tests</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            {{-- <li class="{{ Route::currentRouteNamed('admin.addStaff') ? 'active' : '' }}"><a href="{{ route('admin.addStaff') }}">Add New Test</a></li>
            <li class="{{ Route::currentRouteNamed('admin.allStaff') ? 'active' : '' }}"><a href="{{ route('admin.allStaff') }}">All Tests</a></li> --}}

            <li class="{{ Route::currentRouteNamed('admin.addAvailableTest') ? 'active' : '' }}"><a href="{{ route('admin.addAvailableTest') }}">Add Available Test</a></li>
            <li class="{{ Route::currentRouteNamed('admin.allAvailableTest') ? 'active' : '' }}"><a href="{{ route('admin.allAvailableTest') }}">All Available Tests</a></li>
            
          </ul>
        </li> 



        <li class="{{ Route::currentRouteNamed('StaffProfileUpdate') ? 'active' : '' }}"><a href="{{ route('StaffProfileUpdate') }}"><i class="fa fa-tachometer"></i> <span>My Profile
          <span class="right badge badge-warning">Update</span></span></a></li>
          
       

      {{-- Logout --}}
      <li>
          <!-- Logout modal trigger Button -->
          <a href="#" class="nav-link btn btn-primary btn-lg" data-toggle="modal" data-target="#staticBackdrop">                
          <span>Logout</span>
          </a>                         
      </li>
       


    
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>