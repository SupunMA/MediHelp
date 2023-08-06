@extends('layouts.adminLayout')

@section('content')
<div class="container-fluid ">
    
    {{-- button to go to all lands --}}
    

    
        
        {{-- <div class="row"> --}}

            {{-- Client Details form --}}
            @include('Users.Admin.Payment.components.pendingTable')
           
            {{-- Client Password form --}}
            

        {{-- </div>  --}}
            {{-- End of Row --}}

  
            {{-- End of Form --}}


</div>
@endsection

@section('header')
Pending Payment Details
@endsection