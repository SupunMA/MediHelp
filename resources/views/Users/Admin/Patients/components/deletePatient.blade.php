<!-- Edit branch -->
<div class="modal fade" id="clientDeleteModal-{{$UserPatient->pid}}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-danger" id="exampleModalCenterTitle">Delete <b>{{$UserPatient->name}}</b> Client</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="client/delete/{{$UserPatient->pid}}" method="get">
                @csrf
                
                <div class="modal-body">
                  
                    <h5>Are you sure you want to Delete ?.. </h5>
                        <h2 class="text-center text-danger"><b>{{$UserPatient->name}}</b> Client</h2>
                    <i>Please confirm it again. you will not be able to recover this user data.</i>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger" >Delete Permanently</button>
                </div>
            </form>

        </div>
    </div>
</div>


