@extends('layouts.adminLayout')

@section('content')
<div class="container-fluid ">

    {{-- button to go to all clients --}}
    <a class="btn btn-danger mb-1" href="{{route('admin.allClient')}}">
        <i class="fas fa-list-ul mr-1"></i>
        <b>View All Clients</b>
    </a>
    
    <form action="{{route('admin.addingClient')}}" method="post">
        @csrf
        <div class="row">

            {{-- Client Details form --}}
            @include('Users.Admin.Patients.components.newPatientDetails')

            {{-- Client Password form --}}
            @include('Users.Admin.Patients.components.PatientPWD')
            

        </div>
    </form>
    {{-- End of Row --}}


    {{-- End of Form --}}


</div>
@endsection

@section('header')
Register New Customer
@endsection
