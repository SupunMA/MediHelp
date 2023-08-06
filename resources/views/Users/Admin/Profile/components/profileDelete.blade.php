 <!-- This form included into addClient Blade -->
 
 {{-- Start of Second Card --}}

 <div class="col-lg-6 col-md-12">
    <div class="card card-danger">
        <div class="card-header">
            <h3 class="card-title">Delete The Account</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->

        <div class="card-body">

            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Click Below Button to Delete the Account!</label>
                        
                    </div>
                </div>


            </div>
            

            
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <div class="row">
    
                <div class="form-group">
                   
                    {{-- Delete Button --}}
                    <a class="btn btn-danger" type="button" data-toggle="modal" data-target="#clientDeleteModal-{{$client->id}}"  >
                        <i class="far fa-trash-alt"> Delete My Account</i>
                    </a>
                    <!-- /.card-body -->
                    {{-- add delete modal --}}
                    @include('Users.Admin.Profile.components.deleteProfile')
                </div>
            </div>
        </div>
    </div>
    
</div>


{{-- End of Second Card --}}