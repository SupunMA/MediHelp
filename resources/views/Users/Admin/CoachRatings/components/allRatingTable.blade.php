<div class="card card-warning">
    <div class="card-header">
        <h3 class="card-title">All Ratings</h3>
    </div>
    <!-- /.card-header -->
    

    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Coach ID</th>
                    <th>Name</th>
                    <th>Rating Count</th>
                    <th>Precentage</th>
                   
                    
                </tr>
            </thead>
            <tbody>
                 

                @foreach ($coaches as $coach)
                @php
                    $unac = 0;
                    $Weak = 0;
                    $Good = 0;
                    $VeryG = 0;
                    $exc = 0;
                @endphp
                    <tr>
                        <td>{{$coach->id}}</td>
                        <td>{{$coach->name}}</td>
                        <td>
                            @foreach ($timeTables as $timeTable)
                                @if ($coach->id === $timeTable->coachID)
                                    @if ($timeTable->review === 5)
                                        @php
                                            $exc = $exc + 1;
                                        @endphp
                                        

                                    @elseif ($timeTable->review === 4)

                                        @php
                                            $VeryG = $VeryG + 1;
                                        @endphp
                                        


                                    @elseif ($timeTable->review === 3)

                                        @php
                                            $Good = $Good + 1;
                                        @endphp
                                         
                                        
                                    

                                    @elseif ($timeTable->review === 2)

                                        @php
                                            $Weak = $Weak + 1;
                                        @endphp
                                        
                                        
                                    

                                    @elseif ($timeTable->review === 1)

                                        @php
                                            $unac = $unac + 1;
                                        @endphp
                                        
                                        
                                    @endif
                                @endif
                                
                            @endforeach
                            Excellent - {{$exc}} <br>
                            Very Good - {{$VeryG}} <br>
                            Good - {{$Good}} <br>
                            Weak - {{$Weak}} <br>
                            Unacceptable - {{$unac}} <br>
                            <br>
                            <h6><b> Total Reviews : {{$exc + $VeryG + $Good + $Weak + $unac}}</b>  </h6>
                        </td>

                        <td> 
                            @if (($exc + $VeryG + $Good + $Weak + $unac) > 0)
                                @php
                                $precent = 0;
                                $precent = (($exc * 5) + ($VeryG * 4) + ($Good * 3) + ($Weak * 2) + ($unac * 1)) *  100 / (($exc + $VeryG + $Good + $Weak + $unac) * 5)
                                @endphp
                                <h3>{{round($precent,1)}}%</h3>
                            @else
                                <h3>0%</h3>
                            @endif
                            
                            
                        </td>
                        
                    </tr>
                @endforeach

            </tbody>
            <tfoot>
                <tr>
                    <th>Coach ID</th>
                    <th>Name</th>
                    <th>Rating Count</th>
                    <th>Precentage</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->