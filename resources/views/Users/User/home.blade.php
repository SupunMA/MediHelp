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
            <div class="box box-primary">
                <div class="box-header">
                   

                   
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="box-body">
                    <div class="row">
                        
                        
                        
                       
                        <!-- Small boxes (Stat box) -->
                        <div class="row">
                            <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>435</h3>
                                    <h4>Pending Results</h4>
                                </div>
                                <div class="icon">
                                <i class="fa fa-users" aria-hidden="true"></i>
                                </div>
                                <a href="{{route('admin.allPatient')}}" class="small-box-footer">
                                View Patients <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                <h3>Rs 454<sup style="font-size: 20px">.00</sup></h3>

                                <h4>Reports</h4>
                                </div>
                                <div class="icon">
                                <i class="fa fa-money" aria-hidden="true"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                            </div>
                            <!-- ./col -->
                            
                        </div>
                        <!-- /.row -->

                    </div>


                    <br>

                    



dfd

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
