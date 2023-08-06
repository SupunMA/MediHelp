<!-- This form included into addClient Blade -->

<div class="col-lg-6 col-12 ">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Staff Member's Details</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->

        <div class="card-body">
            @include('Users.Admin.messages.addMsg')

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

                

                <div class="col-lg-6 col-12">
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
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
                        </div>
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
                 <div class="form-group">
                    <label>Joining Date</label>

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                        </div>
                        <input type="text" class="form-control" data-inputmask-alias="datetime"
                            name="joinDate" data-inputmask-inputformat="yyyy-mm-dd" data-mask>
                    </div>
                
                </div>
            
                {{-- Role value --}}

                <div class="col-lg-6 col-12">
                    <div class="form-group">
                        <label>Select The Role</label>
                        <select class="form-control select2bs4" style="width: 100%;" name="role" >
                            {{-- <option selected="selected">Alabama</option> --}}
                            
                                <option value="1">Admin</option>
                                <option value="2" selected="selected">Coach</option>
                                <option value="3">Manager</option>
                            
                            
                        </select>
                    </div>
                </div>

            </div>

            <div class="row" >
                <div class="form-group">
                    <label>Select Working Days</label> 
                    <br>
                    <input type="checkbox"  name="sun" value="1">
                    <label for="sun" style="padding-right: 20px;padding-left: 5px;"> Sunday</label>
                    <input type="checkbox"  name="mon" value="2">
                    <label for="mon" style="padding-right: 20px;padding-left: 5px;"> Monday</label>
                    <input type="checkbox"  name="tue" value="3">
                    <label for="tue" style="padding-right: 20px;padding-left: 5px;"> Tuesday</label>
                    <input type="checkbox"  name="wed" value="4">
                    <label for="wed" style="padding-right: 20px;padding-left: 5px;"> Wednesday</label><br>
                    <input type="checkbox"  name="thu" value="5">
                    <label for="thu" style="padding-right: 20px;padding-left: 5px;"> Thuresday</label>
                    <input type="checkbox"  name="fri" value="6">
                    <label for="fri" style="padding-right: 20px;padding-left: 5px;"> Friday</label>
                    <input type="checkbox"  name="sat" value="7">
                    <label for="sat" style="padding-right: 20px;padding-left: 5px;"> Saturday</label><br>

                    <input type="hidden" name="hiddenDay" value="0">
                </div>
            </div>


            {{-- <input name="role" type="hidden" value="2"> --}}
        </div>
        <!-- /.card-body -->



    </div>
</div>
{{-- End of First Card --}}




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