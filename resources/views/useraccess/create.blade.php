<div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
        <form action="{{ route('user.store') }}" method="POST" id="formUser">
            <div class="modal-header bg-gradient-gray-dark">
                <h5 class="modal-title" id="staticBackdropLabel">Create data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @csrf
                    <div class="mb-3">
                        <label class="form-label">Full name</label>
                        <input type="text" class="form-control" placeholder="full name" name="name">
                        <input type="hidden" class="form-control" name="engineer_id">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">email</label>
                        <input type="email" class="form-control" placeholder="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Level</label>
                        <select name="unit" class="form-control">
                            <option value="user">User</option>
                            <option value="engineer">engineer</option>
                            <option value="dc">Document Controller</option>
                        </select>
                    </div>                                      
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-sm btn-primary rounded-0"><i class="fas fa-save"></i> Save</button>
                <button type="button" class="btn btn-sm btn-danger rounded-0" data-dismiss="modal"><i class="fas fa-times-circle"></i> Close</button>
            </div>
        </form>
    </div>
</div>