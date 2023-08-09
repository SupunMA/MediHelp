<div class="box">
    <div class="box-header">
      <h3 class="box-title">List of Patients</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
          
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Available Test Name</th>
                    <th>Normal Range</th>
                    <th>Cost</th>
                    <th>Action</th>
                    
                </tr>
            </thead>
            <tbody>

                @foreach ($AvailableTests as $AvailableTest)
                    <tr>
                        <td>{{$AvailableTest->id}}</td>
                        <td>{{$AvailableTest->AvailableTestName}}</td>
                        <td>{{$AvailableTest->AvailableTestRange}}</td>
                        <td>{{$AvailableTest->AvailableTestCost}}</td>
                        
                        
                        <td>
                            <a class="btn btn-warning" type="button" data-toggle="modal" data-target="#branchEditModal-{{$AvailableTest->id}}" >
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                            <a class="btn btn-danger" type="button" data-toggle="modal" data-target="#branchDeleteModal-{{$AvailableTest->id}}"  >
                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
                    
                            {{-- update modal and delete modal --}}
                            @include('Users.Admin.AvailableTests.components.updateTest')
                            @include('Users.Admin.AvailableTests.components.deleteTest')
                @endforeach

            </tbody>
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Available Test Name</th>
                    <th>Normal Range</th>
                    <th>Cost</th>
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