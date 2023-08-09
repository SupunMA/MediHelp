@include('Users.Admin.messages.addMsg')

<div class="col-lg-8">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Available Test's Details</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <div class="box-body">
<form action="{{ route('admin.addingAvailableTest') }}" method="post">
                @csrf
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="form-group">
                        <label>Test Name</label>
                        <input type="text" name="AvailableTestName" class="form-control"  placeholder="Enter Name">
                    </div>
                </div>
            {{-- Gender --}}
            
                <div class="col-lg-3 col-12">
                    <div class="form-group">
                        <label>Normal Range</label>
                        
                        <input type="text" id="normal_range" name="AvailableTestRange" pattern="\d+-\d+" class="form-control" placeholder="Enter range (e.g. 40-120)">
                    </div>
                </div>


                <div class="col-lg-3 col-12">
                    <div class="form-group">
                        <label>Cost</label>
                        
                        <input type="number" name="AvailableTestCost" class="form-control" placeholder="Cost for the test">
                    </div>
                </div>
            </div>
                

            <div class="box-footer">
                <div class="form-group pull-right">
                    <small class="form-text text-muted text-right">Please check details again.</small><br>
                    <button type="submit" class="btn btn-danger  float-right"><b>&nbsp; Save All&nbsp;</b>
                    </button>
                </div>
            </div>
    
 </form>           
        </div>
    </div>
    <!-- /.box -->
</div>




@push('specificJs')

<script>
    $(document).ready(function() {
        $('#normal_range').inputmask('99-999', {
            placeholder: ' ', // Space as a placeholder for each digit
        });
    });
</script>
@endpush