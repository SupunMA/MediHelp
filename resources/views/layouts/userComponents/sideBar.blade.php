<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin.home')}}" class="brand-link">
        <img src="https://media.istockphoto.com/id/1145254708/vector/portable-swimming-pool-vector-icon-illustration.jpg?s=612x612&w=0&k=20&c=lmIkgqOrzddXYqGZwWgClceUT5ZDK11MjKKarmXm90U="
            alt="MMC Logo" class="brand-image img-circle elevation-3" style="opacity: 1">
        <span class="brand-text font-weight-light">Client Account</span>
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

        
        
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->
                <li class="nav-item">
                  <a href="{{ route('user.home') }}" class="nav-link {{ Route::currentRouteNamed('user.home') ? 'active' : ' ' }}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                      <p>Dashboard
                          <span class="right badge badge-danger">Live</span>
                      </p>
                  </a>
                </li>


                <li class="nav-item">
                    <a href="{{ route('CustomerAllPlanView') }}" class="nav-link {{ Route::currentRouteNamed('CustomerAllPlanView') ? 'active' : '' }}">
                        <i class="fa-solid fa-list-check"></i>
                        <p>
                            Select Plan
                            
                        </p>
                    </a>
                </li>



                <li class="nav-item">
                    <a href="{{ route('CustomerMakePaymentsView') }}" class="nav-link {{ Route::currentRouteNamed('CustomerMakePaymentsView') ? 'active' : '' }}">
                        <i class="fas fa-money-bill-wave"></i>
                        <p>
                            Make Payments
                            
                        </p>
                    </a>
                </li>



                <li class="nav-item">
                    <a href="{{ route('CustomerProfileUpdate') }}" class="nav-link {{ Route::currentRouteNamed('CustomerProfileUpdate') ? 'active' : '' }}">
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