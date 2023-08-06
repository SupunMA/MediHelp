@extends('layouts.adminLayout')

@section('content')


<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                {{-- button to go to add client --}}
                <a class="btn btn-danger mb-1" href="{{route('admin.addStaff')}}">
                    <i class="fas fa-user-plus mr-1"></i>
                    <b>Add New Staff Member</b>
                </a>

                <!-- Import Table -->
               @include('Users.Admin.Staff.components.allStaffTable')
            
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>





@endsection

@section('header')
All Staff Members
@endsection
