@include('Users.Admin.messages.addMsg')

<div class="col-lg-6">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">New Customer's Details</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        {{-- <form role="form"> --}}
            <div class="box-body">

                <div class="form-group">
                    <label >Name</label>
                    <input type="name" name="name" class="form-control" id="name" placeholder="Enter Name">
                </div>
    {{-- Gender and DOB --}}
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="form-group">
                            <label>Gender</label>
                            
                            <select class="form-control select2bs4" style="width: 100%;" name="gender">
                                <option selected="selected" value="M">Male</option>
                                <option value="F">Female</option>
                                <option value="O">Other</option>
                                
                                
                            </select>
                        </div>
                    </div>
    
                    
    
                    <!-- Date -->
                    <div class="form-group">
                        <label>Date of Birth</label>
    
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                            </div>
                            <input type="text" class="form-control" data-inputmask-alias="datetime"
                                name="dob" data-inputmask-inputformat="yyyy-mm-dd" data-mask>
                        </div>
                    
                    </div>
                
    
                </div>
    {{-- Address and zipcode --}}
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="form-group">
                            <label >Address</label>
                            <textarea class="form-control" name="address" id="" cols="30" rows="4"
                                placeholder="Address"></textarea>
                        </div>
                    </div>
    
                    
    
                    <div class="col-lg-2 col-3">
                        <div class="form-group">
                            <label >Zip Code</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control"
                                    data-inputmask="'mask': ['99999']" data-mask
                                    placeholder="Zip Code" name="zipCode">
                                
                            </div>
                        </div>
                    </div>
    
                </div>
    
    {{-- Mobile and Email --}}
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <label >Mobile</label>
                        <div class="form-group">
                            
                            <input type="text" class="form-control" data-inputmask='"mask": "(999) 999 9999"' data-mask
                                placeholder="Mobile Number" name="mobile">
                        </div>
    
    
                    </div>
    
    
                    <div class="col-lg-6 col-12">
                        <div class="form-group">
                            <label >Email Address</label>
                            <input type="email" class="form-control" name="email" placeholder="Email Address">
                        </div>
                    </div>
    
    
                </div>
    
                
    {{-- Joining Date and Plan --}}
                <div class="row">
                     <!-- Date  -->
                     <div class="col-lg-6 col-12">
                        <div class="form-group">
                        <label>Joining Date</label>
                            
                            <input type="text" class="form-control" data-inputmask-alias="datetime"
                                name="joinDate" data-inputmask-inputformat="yyyy-mm-dd" data-mask>
                    
                        </div>
                    </div>
                    
    
                </div>
    
    {{-- Role value --}}
                <input name="role" type="hidden" value="0">
            <!-- /.box-body -->
        
                
            </div>
        
    
    <!-- /.box -->
</div>



</div>

















  @push('specificJs')

{{-- toastr msg --}}
<script>
    $('.toastrDefaultError').click(function () {
        toastr.error("Could't Save the Data. Please try again")
    });

    $('.toastrDefaultSuccess').click(function () {
        toastr.success('&#160; Saved Successfully!.&#160;')
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