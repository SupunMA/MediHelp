<div class="card card-warning">
    <div class="card-header">
        <h3 class="card-title">Timetable</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        
        <table id="example1" class="table table-bordered table-striped">
            
            <thead>
                <tr>
                    <th>Booking ID</th>
                    <th>client Name - ID</th>
                    <th>Coach Name - ID</th>
                    <th>Date</th>
                    <th>Time Slot</th>
                   
                </tr>
            </thead>
            <tbody>
                @foreach ($timeTables as $timeTable)
                    {{-- except auth user --}}
                   
                    <tr>
                        <td>{{$timeTable->id}}</td>
                        @foreach ($clients as $client)
                            @if ($client->id === $timeTable->clientID)
                                <td>{{$client->name}} - {{$client->id}} </td>
                            @endif
                        @endforeach
                        @foreach ($coaches as $coach)
                            @if ($coach->id === $timeTable->coachID)
                                <td>{{$coach->name}} - {{$coach->id}}</td>
                            @endif
                        @endforeach

                        <td>{{$timeTable->date}}</td>

                        @foreach ($slots as $slot)
                        @if ($slot->slotID === $timeTable->slotID)
                            <td>{{$slot->slotTime}}</td>
                        @endif
                    @endforeach

                    </tr>

                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>Booking ID</th>
                    <th>client Name - ID</th>
                    <th>Coach Name - ID</th>
                    <th>Date</th>
                    <th>Time Slot</th>
                </tr>
                </tr>
            </tfoot>
            
        </table>
       
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
