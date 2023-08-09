<!-- Edit Plan -->
<div class="modal fade" id="branchEditModal-{{$TestData->tid}}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalCenterTitle">Update Test <b>{{$TestData->tid}}</b> </h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{ route('admin.updateTest') }}" method="post">
                @csrf
                <div class="box box-primary">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-lg-8 col-12">
                                <div class="form-group">
                                    <label>Test Name</label>
                                    <input type="text" name="AvailableTestName" class="form-control" value="{{$AvailableTest->AvailableTestName}}"  placeholder="Enter Name">
                                </div>
                            </div>
                        {{-- Gender --}}
                        
                            <div class="col-lg-4 col-12">
                                <div class="form-group">
                                    <label>Normal Range</label>
                                    
                                    <input type="text" id="normal_range" name="AvailableTestRange" value="{{$AvailableTest->AvailableTestRange}}" pattern="\d+-\d+" class="form-control" placeholder="Enter range (e.g. 40-120)">
                                </div>
                            </div>
                        </div>
                    
        
                        <input type="hidden" name="id" value="{{$TestData->tid}}">

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Save changes</button>
                    </div>
                </div>
        </div>
                
            </form>

       
    </div>
</div>
