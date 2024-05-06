<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <form action="{{ route('action-type.store') }}" method="POST" id="formTypeOfAction">
            <div class="modal-header bg-gradient-gray-dark">
                <h5 class="modal-title" id="staticBackdropLabel">Create data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @csrf
                    <div class="mb-3">
                        <label class="form-label">Type of action</label>
                        <input type="text" class="form-control form-control-sm rounded-0" placeholder="Type of action" name="type_of_action" >
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <input type="text" class="form-control form-control-sm rounded-0" placeholder="Description" name="description">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Package</label>
                        <select name="package_id" class="form-control form-control-sm rounded-0">
                            {!!packageName()!!}
                        </select>
                    </div>                                  
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-sm btn-primary rounded-0"><i class='fas fa-save'></i> Save</button>
                <button type="button" class="btn btn-sm btn-danger rounded-0" data-dismiss="modal"><i class='fas fa-times'></i> Close</button>
            </div>
        </form>
    </div>
</div>
