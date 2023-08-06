
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
    <div class="card card-dark">
        <div class="card-header">

             <h3 class="card-title">Plan Details</h3>

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
               
                <div class="card-deck text-center ">

                    
                    @foreach ($plans as $plan)
                   
                    @if ($plan->planID == Auth::user()->refPlan)
                    {{-- Selected plan --}}
                        <div class="card col-xl-4 col-lg-12 col-md-6 col-sm-12 text-white bg-dark ">
                            <h2><b>{{$plan->planName}}</b></h2>
                             <img src="https://abovegroundpoolsknowitall.com/wp-content/uploads/2021/02/crystal_clear_water-05-1024x693.jpeg" style="max-width:600px;height:auto;" class="card-img-top" alt="...">
                            <div class="card-body">
                                
                                <h3>Rs.{{$plan->planPrice}}.00</h3>
                                <p class="card-text">
                                    Months: {{$plan->planMonth}}
                                
                                </p>
                            </div>
                            <div class="card-footer">
                                <form action="{{route('selectPlan')}}" method="post">
                                    @csrf 
                                    <input type="hidden" name="planID" value="{{$plan->planID}}">
                                    <button type="submit" disabled class="btn btn-secondary"><b>Selected Plan</b> </button>
                                </form>
                            
                                
                            </div>
                        </div>
                    @else
                    {{-- selectable plans --}}
                        <div class="card col-xl-4 col-lg-12 col-md-6 col-sm-12">
                            <h2><b>{{$plan->planName}}</b></h2>
                        <img src="https://abovegroundpoolsknowitall.com/wp-content/uploads/2021/02/crystal_clear_water-05-1024x693.jpeg" style="max-width:600px;height:auto;" class="card-img-top" alt="...">
                        <div class="card-body">
                            
                            <h3>Rs.{{$plan->planPrice}}.00</h3>
                            <p class="card-text">
                                Months: {{$plan->planMonth}}
                            
                            </p>
                        </div>
                        <div class="card-footer">
                            <form action="{{route('selectPlan')}}" method="post">
                                @csrf 
                                <input type="hidden" name="planID" value="{{$plan->planID}}">
                                <button type="submit" class="btn btn-success"><b>Select Plan</b> </button>
                            </form>
                        
                            
                        </div>
                        </div>
                        
                    @endif
                    
                        

                        
                        
                    @endforeach
                </div>


                
        
            
            </div>

        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>

