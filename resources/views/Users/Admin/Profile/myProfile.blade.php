@extends('layouts.adminLayout')

@section('content')
<div class="container-fluid ">

    {{-- button to go to all clients --}}
    @include('Users.Admin.messages.addMsg')
    
   <h3> Update the Account Details</h3>
    <form action="{{route('StaffProfileUpdating')}}" method="post">
        @csrf
        <div class="row">

            {{-- Client Details form --}}
            @include('Users.Admin.Profile.components.myProfileDetails')

            {{-- Client Password form --}}
            @include('Users.Admin.Profile.components.profilePWD')
            
 
        </div>
        <h3> Delete the Account</h3>
        @include('Users.Admin.Profile.components.profileDelete')
    </form>
    {{-- End of Row --}}

    
    {{-- End of Form --}}


</div>
@endsection

@section('header')
My Profile
@endsection
