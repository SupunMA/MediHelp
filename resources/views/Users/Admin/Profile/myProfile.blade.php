@extends('layouts.adminLayout')

@section('content')
<div class="container-fluid ">

    {{-- button to go to all clients --}}
    @include('Users.Admin.messages.addMsg')
    
   <h3> Update the Account Details</h3>
    <form action="{{route('admin.updateAdmin')}}" method="post">
        @csrf
        <div class="row">

            {{-- Client Details form --}}
            @include('Users.Admin.Profile.components.myProfileDetails')
        </div>
        <div class="row">

            {{-- Client Password form --}}
            @include('Users.Admin.Profile.components.profilePWD')
            
 
        </div>
</form>
        <div class="row">
            @include('Users.Admin.Profile.components.profileDelete')
        </div>

    
    {{-- End of Row --}}

    
    {{-- End of Form --}}


</div>
@endsection

@section('header')
My Profile
@endsection
