
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
    <div class="card card-dark">
        <div class="card-header">

             <h3 class="card-title">Calculated Details</h3>

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
               
                <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                    <!-- small card -->
                    <div class="small-box bg-primary">
                        <div class="inner">
        
                            <h3>{{$ClientsCount}}</h3>
                            <h2>Clients</h2>
        
                        </div>
                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <a href="{{route('admin.allClient')}}" class="small-box-footer">
                            More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
        
            
                <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                    <!-- small card -->
                    <div class="small-box bg-light">
                        <div class="inner">
        
                            @php
                                $totalPaidAmount = 0;

                            @endphp
                            <h3>
                                @foreach ($AllPlans as $plan)
                        
                                    @foreach ($AllPayments as $AllPayment)
                                    
                                        @if ($plan->planID === $AllPayment->planID && $AllPayment->confirm === 1 && date('m', strtotime($AllPayment->payDate)) === date('m') && date('y', strtotime($AllPayment->payDate)) === date('y'))
                                            
                                            @php
                                                 $totalPaidAmount = $totalPaidAmount + $plan->planPrice;
                                            @endphp
                                            
                                        @endif
                                    
                                    @endforeach
                            
                                @endforeach
                                Rs.{{$totalPaidAmount}}.00
                            </h3>
                            <h2 style="display: inline-block">Revenue</h2>
                            <h5 style="display: inline-block">(This Month - {{date('F')}})</h5>
                            
                        </div>
                        <div class="icon">
                            <i class="fas fa-money-bill-wave"></i>
                        </div>
                        <a href="{{route('admin.currentMonthTable')}}" class="small-box-footer">
                            More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                


                <div class="col-xl-2 col-lg-4 col-md-4 col-6">
                    <!-- small card -->
                    <div class="small-box bg-success">
                        <div class="inner">
        
                            <h3>{{$PlanCount}}</h3>
                            <h2>Plans</h2>
                            
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-list-check"></i>
                        </div>
                        <a href="{{route('admin.allPlan')}}" class="small-box-footer">
                            More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>



                <div class="col-xl-2 col-lg-4 col-md-4 col-6">
                    <!-- small card -->
                    <div class="small-box bg-warning">
                        <div class="inner">
        
                            <h3>{{$CoachCount}}</h3>
                            <h2>Coaches</h2>
        
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-person-swimming"></i>
                        </div>
                        <a href="{{route('admin.allStaff')}}" class="small-box-footer">
                            More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>

                

                <div class="col-xl-2 col-lg-4 col-md-4 col-6">
                    <!-- small card -->
                    <div class="small-box bg-danger">
                        <div class="inner">
        
                            <h3>{{$ManagerCount}}</h3>
                            <h2>Managers</h2> 
        
                        </div>
                        <div class="icon">
                            <i class="fas fa-user-shield"></i>
                        </div>
                        <a href="{{route('admin.allStaff')}}" class="small-box-footer">
                            More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
        
                <div class="col-xl-2 col-lg-4 col-md-4 col-6">
                    <!-- small card -->
                    <div class="small-box bg-info">
                        <div class="inner">
        
                            <h3>{{$AdminCount}}</h3>
                            <h2>Admins</h2> 
                            
                        </div>
                        <div class="icon">
                            <i class="fas fa-user-lock"></i>
                        </div>
                        <a href="{{route('admin.allStaff')}}" class="small-box-footer">
                            More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>

            </div>


            


            


        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>