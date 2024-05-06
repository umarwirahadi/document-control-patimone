<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <form action="{{ route('work.update',$id) }}" method="POST" id="formWorkItem">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Create data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @csrf
                @method('PUT')
                    <div class="mb-3">
                        <label class="form-label">Item No.</label>
                        <input type="text" class="form-control" placeholder="Item No" name="item_no" value="{{$item_no ?? ''}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Pay item</label>
                        <input type="text" class="form-control" placeholder="Pay item" name="pay_item" value="{{$pay_item ?? ''}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Unit</label>
                        <select name="unit" class="form-control">
                            <option value="m">m</option>
                            <option value="no">no</option>
                            <option value="m2">m2</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" rows="3" name="description">{{$description ?? ''}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select name="status" class="form-control">
                            <option value="1">Active</option>
                            <option value="0">Not active</option>
                        </select>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-sm btn-primary rounded-0"><i class="fas fa-save"></i> Update</button>
                <button type="button" class="btn btn-sm btn-danger rounded-0" data-dismiss="modal"><i class="fas fa-times-circle"></i> Close</button>
            </div>
        </form>
    </div>
</div>
