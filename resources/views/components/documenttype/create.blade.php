<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <form action="{{ route('documenttype.store') }}" method="POST" id="formDocumentType">
            <div class="modal-header bg-gradient-gray-dark">
                <h5 class="modal-title" id="staticBackdropLabel">Create data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @csrf
                    <div class="mb-3">
                        <label class="form-label">Document type name</label>
                        <input type="text" class="form-control form-control-sm data-focus" placeholder="Document type name" name="document_type_name" >
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Category</label>                        
                        <select name="category_id" class="form-control form-control-sm">
                            <option value="IN">IN</option>
                            <option value="OUT">OUT</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Package</label>
                        <select name="package_id" class="form-control form-control-sm">
                            {!!packageName()!!}
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea class="text-area" id="description" name="description" cols="30" rows="2"></textarea>
                    </div>                    
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-sm btn-primary rounded-0"><i class='fas fa-save'></i> Save</button>
                <button type="button" class="btn btn-sm btn-danger rounded-0" data-dismiss="modal"><i class='fas fa-times'></i> Close</button>
            </div>
        </form>
    </div>
</div>
