@extends('layouts.adminLayout')

@section('content')
<div class="container-fluid ">
    <a class="btn btn-danger mb-1" href="{{route('admin.allAvailableTest')}}">
        <i class="fa fa-th-list" aria-hidden="true"></i>
        <b>View Available Test</b>
    </a>
        
    <div class="row">

        @include('Users.Admin.Reports.components.newReportDetails')
        
    </div> 
            


</div>
@endsection

@section('header')
Add Report
@endsection