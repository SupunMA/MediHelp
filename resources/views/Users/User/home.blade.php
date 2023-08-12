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

                    



                    <div class="box">
                        <div class="box-header">
                          <h3 class="box-title">List of Reports</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                              
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Report ID</th>
                                        <th>Patient Name</th>
                                        <th>Test Name</th>
                                        <th>Result</th>
                                        <th>Status</th>
                    
                                        <th>Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                    
                                    @foreach ($allReportData as $data)
                                        <tr>
                                            <td>{{$data->rid}}</td>
                                            <td>{{$data->name}}</td>
                                            <td>{{$data->AvailableTestName}}</td>
                                            <td>{{$data->result}}</td>
                                            <td>{{$data->status}}</td>
                                            
                                            
                                            <td>
                                                <a class="btn btn-warning" type="button" data-toggle="modal" data-target="#branchEditModal-{{$data->rid}}" >
                                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                                </a>
                                                <a class="btn btn-danger" type="button" data-toggle="modal" data-target="#branchDeleteModal-{{$data->rid}}"  >
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                </a>
                                                @php
                                                     $viewReportURL = route('user.viewReport', ['ID' => $data->rid]);
                                                @endphp
                                               
                                                    <a class="btn btn-success" type="button" href="{{ $viewReportURL }}"  target="_blank">
                                                        <i class="fa fa-cloud-download" aria-hidden="true"></i> Download
                                                    </a>
                                               
                                                
                                            </td>
                                        </tr>
                                        
                                                {{-- update modal and delete modal --}}
                                                @include('Users.Admin.Reports.components.updateReport')
                                                @include('Users.Admin.Reports.components.deleteReport') 
                                                {{-- @include('Users.Admin.Reports.components.invoice-print')  --}}
                                    @endforeach
                    
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Report ID</th>
                                        <th>Patient Name</th>
                                        <th>Test Name</th>
                                        <th>Result</th>
                                        <th>Status</th>
                    
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                      <!-- /.box -->
                    
                      
                    

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


@push('specificJs')

<script>
    $(function () {
    $('#example1').DataTable()
    })
</script>

@endpush