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
                        </td>
                    </tr>
                    
                            {{-- update modal and delete modal --}}
                            @include('Users.Admin.Reports.components.updateReport')
                            @include('Users.Admin.Reports.components.deleteReport') 
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

  
@push('specificJs')
{{-- toastr msg --}}

<script>
    $(function () {
    $('#example1').DataTable()
    })
</script>



@endpush