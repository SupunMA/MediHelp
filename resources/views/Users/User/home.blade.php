@extends('layouts.userLayout')
{{-- justify-content-center --}}
@section('content')
<div class="container-fluid">
    
    {{-- Date and Time --}}
    {{-- @foreach ($loanData as $item)
        @include('Users.User.HomeCalculations.components.timeDate')
    @endforeach --}}

    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Details</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        
                        
                        
                       <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="info-box shadow">
                                <span class="info-box-icon bg-danger"><i class="fas fa-book-open"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">

                                        <h5>Available Slots</h5>

                                    </span>
                                    <span class="info-box-number">
                                        <h5><b>{{ $slots->count() }} Slots</b> </h5>
                                    </span>
                                </div>

                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>


                        
                        
                       
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="info-box shadow">
                                <span class="info-box-icon bg-info"><i class="far fa-clock"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">

                                        <h5> Available Coaches</h5>

                                    </span>
                                    <span class="info-box-number">
                                        <h5>
                                            <b>{{ $coaches->count() }} Coaches</b>
                                        </h5>
                                    </span>
                                </div>

                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        


                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="info-box shadow">
                                <span class="info-box-icon bg-info"><i class="far fa-clock"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">

                                        <h5> Available Plans </h5>

                                    </span>
                                    <span class="info-box-number">
                                        <h5>
                                            <b>
                                                {{$plans->count()}} Plans
                                            </b>
                                        </h5>
                                    </span>
                                </div>

                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>

                    </div>


                    <br>

                    
                    @include("Users.User.book")
                    @if (isset($payment) && $payment->confirm === 1)
                        @include("Users.User.myBooks")
                    @endif




                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>

</div>
@endsection

@section('header')
Dashboard
@endsection
