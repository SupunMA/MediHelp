@extends('layouts.adminLayout')

@section('content')
<div class="container-fluid ">
    
        {{-- @include('Users.Admin.messages.deleteMsg') --}}
        {{-- <div class="row"> --}}

            {{-- Client Details form --}}
            @include('Users.Admin.CoachRatings.components.allRatingTable')
           
            {{-- Client Password form --}}

        {{-- </div>  --}}
            
            
            

</div>
@endsection

@section('header')
Ratings
@endsection