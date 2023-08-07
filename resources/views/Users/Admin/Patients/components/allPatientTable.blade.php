<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">All Clients</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        
        @include('Users.Admin.messages.addMsg')


        
        <table id="example1" class="table table-bordered table-striped">
            
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Date of Birth</th>
                    <th>Gender</th>
                    <th>Address, ZipCode</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Join Date</th>
                    <th>Plan</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clients as $client)

                    <tr>
                        <td>{{$client->id}}</td>
                        <td>{{$client->name}}</td>
                        <td>{{$client->dob}}</td>
                        <td>
                            @if ($client->gender=='M')
                                Male
                            @elseif ($client->gender=='F')
                                Female
                            @elseif ($client->gender=='O')
                                Other
                            @endif
                        </td>
                        <td>{{$client->address}}, {{$client->zipCode}}</td>
                        <td>{{$client->email}}</td>
                        <td>{{$client->mobile}}</td>
                        <td>{{$client->joinDate}}</td>
                        <td>{{$client->planName}}</td>
                        
                        
                        
                        <td>
                            <a class="btn btn-warning" type="button" data-toggle="modal" data-target="#ClientEditModal-{{$client->id}}" >
                                <i class="far fa-edit"></i>
                            </a>
                            <a class="btn btn-danger" type="button" data-toggle="modal" data-target="#clientDeleteModal-{{$client->id}}"  >
                                <i class="far fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>

                    {{-- delete modal --}}
                    @include('Users.Admin.Patients.components.deletePatient')
                    {{-- update modal --}}
                    @include('Users.Admin.Patients.components.updatePatient')


                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Date of Birth</th>
                    <th>Gender</th>
                    <th>Address, ZipCode</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Join Date</th>
                    <th>Plan</th>
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