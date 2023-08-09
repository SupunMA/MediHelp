<!-- Edit Plan -->
<div class="modal fade" id="branchEditModal-{{$bd->planID}}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Update <b>{{$bd->planName}}</b> Plan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{route('admin.updatePlan')}}" method="post">
                @csrf
                
                <div class="modal-body">
                   
                    <input type="hidden" name="planID" value="{{$bd->planID}}">
                    
                    <div class="form-group">
                        <label>Name of the Plan</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-list-alt"></i></span>
                            </div>
                            <input type="text" placeholder="Plan Name" name="planName" class="form-control"
                                value="{{$bd->planName}}">
                        </div>
                    </div>


                    <!-- /.form-group -->
                    <div class="form-group">
                        <label>Plan Price</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa-sharp fa-solid fa-money-bill-1-wave"></i></span>
                            </div>
                            <input type="number" name="planPrice" class="form-control"
                                 data-mask placeholder="Plan Price"
                                value="{{$bd->planPrice}}">
                        </div>
                        <!-- /.input group -->
                    </div>

                    <div class="form-group">
                        <label>Plan Months</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                            </div>
                            <input type="number" name="planMonth" class="form-control" placeholder="Months" value="{{$bd->planMonth}}">
                        </div>
                        <!-- /.input group -->
                    </div>


                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Save changes</button>
                </div>
            </form>

        </div>
    </div>
</div>
