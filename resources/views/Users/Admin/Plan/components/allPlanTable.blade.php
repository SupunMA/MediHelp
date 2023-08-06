<div class="card card-warning">
    <div class="card-header">
        <h3 class="card-title">All Plans</h3>
    </div>
    <!-- /.card-header -->
    

    <div class="card-body">
        @include('Users.Admin.messages.addMsg')
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Plan ID</th>
                    <th>Plan Name</th>
                    <th>Plan Price</th>
                    <th>Months</th>
                    <th>Action</th>
                    
                </tr>
            </thead>
            <tbody>

                @foreach ($bdata as $bd)
                    <tr>
                        <td>{{$bd->planID}}</td>
                        <td>{{$bd->planName}}</td>
                        <td>{{$bd->planPrice}}</td>
                        <td>{{$bd->planMonth}}</td>
                        
                        
                        <td>
                            <a class="btn btn-warning" type="button" data-toggle="modal" data-target="#branchEditModal-{{$bd->planID}}" >
                                <i class="far fa-edit"></i>
                            </a>
                            <a class="btn btn-danger" type="button" data-toggle="modal" data-target="#branchDeleteModal-{{$bd->planID}}"  >
                                <i class="far fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                    
                            {{-- update modal and delete modal --}}
                            @include('Users.Admin.Plan.components.updatePlan')
                            @include('Users.Admin.Plan.components.deletePlan')
                @endforeach

            </tbody>
            <tfoot>
                <tr>
                    <th>Plan ID</th>
                    <th>Plan Name</th>
                    <th>Plan Price</th>
                    <th>Months</th>
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