@include('Users.Admin.messages.addMsg')

<div class="col-lg-6">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Report's Details</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <div class="box-body">
<form action="{{ route('admin.addingReport') }}" method="post">
                @csrf
            <div class="row">
                
            {{-- Gender --}}
                <div class="col-lg-12 col-12">
                    <div class="form-group">
                        <label>Select Requested Test</label>
                        
                        <select class="form-control select2" style="width: 100%;" name="tid">
                            {{-- <option selected="selected">Alabama</option> --}}
                            @foreach ($allTestData as $Data)
                                <option value="{{$Data->tid}}">{{$Data->id}} - {{$Data->name}} - {{$Data->AvailableTestName}}</option>
                            @endforeach
                            
                        </select>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="form-group">
                        <label>Result Value</label>
                        
                        <input type="number"  name="result" class="form-control" placeholder="Enter Result">
                    </div>
                </div>


                <div class="col-lg-6 col-12">
                    <div class="form-group">
                        <label>Select Status</label>
                        
                        <select class="form-control select2" style="width: 100%;" name="status">

                            <option selected="selected" value="Normal">Normal</option>
                            <option value="Abnormal">Abnormal</option>

                        </select>
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
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()
    
    })</script>

@endpush