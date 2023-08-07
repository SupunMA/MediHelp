<div class="col-lg-6">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">New Patient's Details</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <div class="box-body">

            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="form-group">
                        <label >Name</label>
                        <input type="name" name="name" class="form-control" id="name" placeholder="Enter Name">
                    </div>
                </div>
            {{-- Gender --}}
            
                <div class="col-lg-4 col-12">
                    <div class="form-group">
                        <label>Gender</label>
                        
                        <select class="form-control" style="width: 100%;" name="gender">
                            <option selected="selected" value="M">Male</option>
                            <option value="F">Female</option>
                            <option value="O">Other</option>
                            
                            
                        </select>
                    </div>
                </div>
            </div>
                

            <div class="row">
                <!-- Date -->
                <div class="col-lg-6 col-12">
                    <!-- Date dd/mm/yyyy -->
                    <!-- Date -->
                    <div class="form-group">
                        <label>Date of Birth</label>

                        <div class="input-group date">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control pull-right" id="datepicker" name="dob">
                        </div>
                        <!-- /.input group -->
                    </div>
                <!-- /.form group -->
                </div>

    

                {{-- Mobile --}}
            
                <div class="col-lg-6 col-12">
                    

                    <!-- phone mask -->
                    <div class="form-group">
                        <label>US phone mask:</label>

                        <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <input type="text" class="form-control" name="mobile" data-inputmask='"mask": "(999) 999-9999"' data-mask>
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                </div>
            </div>


            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="form-group">
                        <label >Email Address</label>
                        <input type="email" class="form-control" name="email" placeholder="Email Address">
                    </div>
                </div>


            
                    <!-- Date  -->
                    <div class="col-lg-6 col-12">
                    <div class="form-group">
                        <label >Name of the Doctor</label>
                        <input type="text" class="form-control" name="doctorName" placeholder="Name of the Doctor">
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
  
  <script>
    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })
  </script>

@endpush