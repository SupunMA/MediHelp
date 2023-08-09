@extends('layouts.adminLayout')

@section('content')
<div class="container-fluid ">
    <a class="btn btn-danger mb-1" href="{{route('admin.allAvailableTest')}}">
        <i class="fas fa-list-ul mr-1"></i>
        <b>View Available Test</b>
    </a>
        
    <div class="row">

        @include('Users.Admin.AvailableTests.components.newTestDetails')
        
    </div> 
            


</div>
@endsection

@section('header')
Add New Test
@endsection