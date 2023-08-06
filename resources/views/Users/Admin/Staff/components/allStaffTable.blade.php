<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">All Staff Members</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        
        @include('Users.Admin.messages.addMsg')


        
        <table id="example1" class="table table-bordered table-striped">
            
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>DOB</th>
                    <th>Gender</th>
                    <th>Address, ZipCode</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Join Date</th>
                    <th>Role</th>
                    <th>W.Days</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clients as $client)
                    {{-- except auth user --}}
                    @if ($client->id != Auth::user()->id)
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
                        <td>
                            @if ($client->role=='1')
                                Admin
                            @elseif ($client->role=='2')
                                Coach
                            @elseif ($client->role=='3')
                                Manager
                            @endif
                            
                        
                        </td>
                        <td>

                            {{strlen($client->wdays)-1}}
                        
                        </td>
                        
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
                    @include('Users.Admin.Staff.components.deleteStaff')
                    {{-- update modal --}}
                    @include('Users.Admin.Staff.components.updateStaff')

                    @endif
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>DOB</th>
                    <th>Gender</th>
                    <th>Address, ZipCode</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Join Date</th>
                    <th>Role</th>
                    <th>W.Days</th>
                    <th>Actions</th>
                </tr>
                </tr>
            </tfoot>
            
        </table>
        <p>
            <b>DOB - Date of Birth <br>
        W.Days - Working Days</b>
        </p>
        
        
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