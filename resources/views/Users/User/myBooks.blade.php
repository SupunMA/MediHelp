<div class="card card-warning">
    <div class="card-header">
        <h3 class="card-title">My Timetable</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
                
        <table id="example1" class="table table-bordered table-striped">
            
            <thead>
                <tr>
                    <th>Booking ID</th>
                    <th>Coach Name</th>
                    <th>Date</th>
                    <th>Time Slot</th>
                    <th>Ratings</th>
                   <th>Action</th>
                   
                </tr>
            </thead>
            <tbody>
                @foreach ($timeTables as $timeTable)
                    {{-- except auth user --}}
                   
                    <tr>
                        <td>{{$timeTable->id}}</td>
                        @foreach ($coaches as $coach)
                            @if ($coach->id === $timeTable->coachID)

                                    <td>{{$coach->name}}</td>

                            @endif
                        @endforeach

                        <td>{{$timeTable->date}}</td>

                        @foreach ($slots as $slot)
                        @if ($slot->slotID === $timeTable->slotID)
                            <td>{{$slot->slotTime}}</td>
                        @endif
                        @endforeach

                        <td>
                            @if (!$timeTable->review  == NULL)

                                @if ($timeTable->review == 1)
                                    Unacceptable - <i>1 Point</i>
                                @elseif ($timeTable->review == 2)
                                    Weak - <i>2 Points</i>
                                @elseif ($timeTable->review == 3)
                                    Good -<i> 3 Points</i>
                                @elseif ($timeTable->review == 4)
                                    Very Good - <i>4 Points</i>
                                @elseif ($timeTable->review == 5)
                                    Excellent - <i>5 Points</i>
                                @endif
                            
                            @else

                                <form action="{{route('coachReview')}}" method="post" >
                                @csrf

                                <input type="radio" id="{{$timeTable->id}}-1" name="{{$timeTable->id}}" value="1">
                                <label for="{{$timeTable->id}}-1"> Unacceptable - <i>1 Points</i> </label><br>
                                
                                <input type="radio" id="{{$timeTable->id}}-2" name="{{$timeTable->id}}" value="2">
                                <label for="{{$timeTable->id}}-2"> Weak - <i>2 Points</i></label><br>
                                
                                <input type="radio" id="{{$timeTable->id}}-3" name="{{$timeTable->id}}" value="3">
                                <label for="{{$timeTable->id}}-3"> Good -<i> 3 Points</i></label><br>
                                
                                <input type="radio" id="{{$timeTable->id}}-4" name="{{$timeTable->id}}" value="4">
                                <label for="{{$timeTable->id}}-4"> Very Good - <i>4 Points</i></label><br>
                                
                                <input type="radio" id="{{$timeTable->id}}-5" name="{{$timeTable->id}}" value="5">
                                <label for="{{$timeTable->id}}-5"> Excellent - <i>5 Points</i></label><br>

                                <input type="hidden" name="timeID" value="{{$timeTable->id}}">


                                <button type="submit" class="btn btn-success">Save</button>
                            </form>
                            @endif
                            
                              

                        </td>
  
                        <td>
                            <form action="{{route('user.deletePayment')}}" method="POST">
                                @csrf
                                <input type="hidden" name="payID" value="{{$timeTable->id}}">
                                <button class="btn btn-danger" type = "submit"><i class="fa fa-trash" aria-hidden="true"></i></button>
                            </form>
                        </td>
                        
                    </tr>
                    


                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>Booking ID</th>
                    <th>Coach Name</th>
                    <th>Date</th>
                    <th>Time Slot</th>
                    <th>Ratings</th>
                   <th>Action</th>
                    
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