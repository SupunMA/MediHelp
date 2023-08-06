@extends('layouts.adminLayout')

@section('content')
<div class="container-fluid ">
    <a class="btn btn-danger mb-1" href="{{route('admin.allPlan')}}">
        <i class="fas fa-list-ul mr-1"></i>
        <b>View All Plans</b>
    </a>
        
        {{-- <div class="row"> --}}

            {{-- Client Details form --}}
            
            @include('Users.Admin.Plan.components.newPlanDetails')
           
            {{-- Client Password form --}}
            
            
        {{-- </div>  --}}
            {{-- End of Row --}}

    
            {{-- End of Form --}}


</div>
@endsection

@section('header')
Add New Plan
@endsection