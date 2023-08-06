@extends('layouts.userLayout')

@section('content')


<div class="container-fluid">

{{-- toastr msg --}}
    {{-- {{$client->id}} --}}

    
    @include('Users.Admin.messages.addMsg')

@foreach ($plans as $bd)
    @if ($bd->planID == Auth::user()->refPlan)
        <form action="{{route('CustomerMakePayments')}}" method="post">
            @csrf
            <div class="card text-white bg-success mb-3" style="max-width: 28rem;">
                <div class="card-header">
                    <h4>Selected Plan is {{$bd->planName}} <br></h4> 
                </div>
                <div class="card-body">
                    <h5 class="card-title">Insert Card Details</h5>

                    <br>

                    <div class="row">
                        <div class="col-lg-12 col-12">
                            <div class="form-group">
                                <label >Card Holder Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Ex:- Amarathunga Malshan">
                            </div>
                        </div>
                    </div>
            

            
                    <div class="row">

                        <div class="col-lg-9 col-9">
                            <div class="form-group">
                                <label >Card Number</label>
                                <input type="text"  maxlength="16" class="form-control" name="cardNo" placeholder="xxxxxxxxxxxxxxxx">
                            </div>
                        </div>

                        <div class="col-lg-3 col-3">
                            <div class="form-group">
                                <label >CSV</label>
                                <input type="text"  maxlength="3" class="form-control" name="CSV" placeholder="xxx">
                            </div>
                        </div>

                    </div>

                    {{-- payment Date --}}


                    <input type="hidden" name="clientID" value={{Auth::user()->id}}>
                    <input type="hidden" name="planID" value={{$bd->planID}}>
                    <input type="hidden" name="payDate" value="{{ date('Y-m-d') }}">


                    <div class="card-footer">
                        <div class="row" >
                            <h5 style="margin-RIGHT: 155PX" class="text-warning">Plan Price is Rs.{{$bd->planPrice}}.00</h5>
                            <button type="submit" class="btn btn-warning" >Pay Now</button>
                        </div>
                        
                    </div>
            
                </div>
            </div>
        </form>
    @else
            
    @endif
@endforeach
        
    


{{-- toastr msg --}}
    @push('specificJs')


<script>
    $('.toastrDefaultError').click(function () {
        toastr.error("Could't Save the Data. Please try again")
    });

    $('.toastrDefaultSuccess').click(function () {
        toastr.success('&#160; Saved Successfully!.&#160;')
    });

</script>

{{-- toastr auto click --}}
<script type="text/javascript">
    $(document).ready(function () {
        $(".toastrDefaultSuccess").click();
        $(".toastrDefaultError").click();
    });

</script>
@endpush
</div>
@endsection

@section('header')
Make Payments
@endsection
