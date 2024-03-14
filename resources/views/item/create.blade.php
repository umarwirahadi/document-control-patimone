    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="{{ route('item.store') }}" method="POST" id="formItem">
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
                            <input type="text" class="form-control data-focus" placeholder="code item" name="item_code" >
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Item name</label>
                            <input type="text" class="form-control" placeholder="item name" name="item_name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Category</label>
                            <select name="item_category" class="form-control">
                                <option value="letter-receive">letter-receive</option>
                                <option value="status-active">status-active</option>
                                <option value="letter-type">letter-type</option>
                                <option value="type-of-action">type-of-action</option>
                                <option value="user-type">User type</option>
                                <option value="other">Other</option>
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
