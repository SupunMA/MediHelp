@extends('layouts.adminLayout')

@section('content')
<div class="container-fluid ">

    {{-- button to go to all clients --}}
    <a class="btn btn-danger mb-1" href="{{route('admin.allStaff')}}">
        <i class="fas fa-list-ul mr-1"></i>
        <b>View Staff Members</b>
    </a>
    
    <form action="{{route('admin.addingStaff')}}" method="post">
        @csrf
        <div class="row">

            {{-- Client Details form --}}
            @include('Users.Admin.Staff.components.newStaffDetails')

            {{-- Client Password form --}}
            @include('Users.Admin.Staff.components.StaffPWD')

        </div>
    </form>
    {{-- End of Row --}}


    {{-- End of Form --}}


</div>
@endsection

@section('header')
Add New Staff Member
@endsection
