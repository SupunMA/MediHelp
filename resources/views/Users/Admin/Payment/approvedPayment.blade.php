@extends('layouts.adminLayout')

@section('content')


<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                {{-- button to go to add lands --}}
               

                <!-- Import Table -->
               @include('Users.Admin.Payment.components.approvedOrDeclinedTable')
            
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>





@endsection

@section('header')
Approved Payment Details
@endsection