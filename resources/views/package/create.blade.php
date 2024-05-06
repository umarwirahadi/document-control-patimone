    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <form action="{{ route('package.store') }}" method="POST" id="formPackage">
                <div class="modal-header bg-gradient-gray-dark">
                    <h5 class="modal-title" id="staticBackdropLabel">Create data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @csrf
                  
                        <div class="mb-3">
                            <label class="form-label">Package name</label>
                            <input type="text" class="form-control" placeholder="Package name" name="package_name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Total days</label>
                            <input type="number" class="form-control" placeholder="total days" name="total_days">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Start date</label>
                            <input type="date" class="form-control" placeholder="start date" name="start_date">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">End date</label>
                            <input type="date" class="form-control" placeholder="end date" name="end_date">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea name="description" rows="5" class="form-control"></textarea>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-sm btn-primary rounded-0"><i class='fas fa-save'></i> Save</button>
                    <button type="button" class="btn btn-sm btn-danger rounded-0" data-dismiss="modal"><i class='fas fa-times'></i> Close</button>
                </div>
            </form>
        </div>
    </div>
