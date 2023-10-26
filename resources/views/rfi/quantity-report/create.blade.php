<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <form action="{{ route('item.store') }}" method="POST" id="formItem">
            <div class="modal-header bg-info">
                <h5 class="modal-title" id="staticBackdropLabel">Create Quantity Report</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @csrf
                    <div class="mb-3">
                        <label class="form-label">Detailed Description/Section/Location of the Activity to be Inspected</label>
                        <div id="detailed_description"></div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Unit</label>
                        <input type="text" class="form-control rounded-0" placeholder="item name" name="item_name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Design Quantity</label>
                        <input type="text" class="form-control rounded-0" placeholder="item name" name="item_name">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-danger rounded-0" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-sm btn-primary rounded-0">Save</button>
            </div>
        </form>
    </div>
</div>
