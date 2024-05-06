    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('position.store') }}" method="POST" id="formposition">
                <div class="modal-header bg-gradient-gray-dark">
                    <h5 class="modal-title" id="staticBackdropLabel">Create data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @csrf
                        <div class="mb-3">
                            <label class="form-label">Code</label>
                            <input type="text" class="form-control first-focus" placeholder="Position code" name="position_code" >
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" placeholder="Position name" name="position_name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Category</label>
                            <select name="category" class="form-control">
                                {!!getItem('user-type')!!}
                            </select>
                        </div>
                        {{-- <div class="mb-3">
                            <label class="form-label">Description</label>
                            <div class="text-area" id="description"></div>
                            <textarea class="form-control" rows="3" name="description"></textarea>
                        </div> --}}

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-sm btn-primary rounded-0"><i class='fas fa-save'></i> Save</button>
                    <button type="button" class="btn btn-sm btn-danger rounded-0" data-dismiss="modal"><i class='fas fa-times'></i> Close</button>
                </div>
            </form>
        </div>
    </div>
