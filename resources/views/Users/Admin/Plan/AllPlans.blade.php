@extends('layouts.adminLayout')

@section('content')
<div class="container-fluid ">
    <a class="btn btn-danger mb-1" href="{{route('admin.addPlan')}}">
        <i class="fas fa-list-ul mr-1"></i>
        <b>Add New Plan</b>
    </a>
        {{-- @include('Users.Admin.messages.deleteMsg') --}}
        {{-- <div class="row"> --}}

            {{-- Client Details form --}}
            @include('Users.Admin.Plan.components.allPlanTable')
           
            {{-- Client Password form --}}

        {{-- </div>  --}}
            
            
            

</div>
@endsection

@section('header')
All Plans
@endsection