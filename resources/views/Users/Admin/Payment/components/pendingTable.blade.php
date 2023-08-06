<div class="card card-warning">
    <div class="card-header">
        <h3 class="card-title">Pending Approval</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">

        @include('Users.Admin.messages.addMsg')
        
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Payment ID</th>
                    <th>Client ID</th>
                    <th>Customer Name</th>
                    <th>Payment Date</th>
                    <th>Plan Name</th>
                    
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($clients as $client)
                  
                    @foreach ($plans as $plan)

                        @foreach ($payments as $payment)
                
                        @if ($payment->clientID == $client->id && $payment->planID == $plan->planID)
                        
                            
                            <tr>
                                <td>{{$payment->paymentID}}</td>
                                <td>{{$client->id}}</td>
                                <td>{{$client->name}}</td>
                                <td>{{$payment->payDate}}</td>
                                <td>{{$plan->planName}}</td>
                                
                                <td>
                                    <form action="{{route('admin.approvePayment')}}" method="POST">
                                        @csrf
                                        <input type="hidden" name="paymentIdHidden" value="{{$payment->paymentID}}">
                                        <input type="radio" name="{{$payment->paymentID}}" value="1" checked>
                                        <label for="1">Accept</label><br>
                                        <input type="radio" name="{{$payment->paymentID}}" value="2">
                                        <label for="2">Decline</label><br>

                                        <button type="submit" class="btn btn-warning"><i class="fa-solid fa-check"></i></button>
                                    </form>
                                </td>
                            </tr>
                        
                            
                        @endif
                        

                        @endforeach
                    

                    @endforeach


                @endforeach
                
            </tbody>
            <tfoot>
                <tr>
                    <th>Payment ID</th>
                    <th>Client ID</th>
                    <th>Customer Name</th>
                    <th>Payment Date</th>
                    <th>Plan Name</th>
                    
                    <th>Actions</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->






@push('specificJs')

{{-- toastr msg --}}
<script>
    $('.toastrDefaultSuccess').click(function () {
        toastr.success('&#160; Done Successfully !.&#160;')
    });

    $('.toastrDefaultError').click(function () {
        toastr.error("Could't Save the Data. Please try again")
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