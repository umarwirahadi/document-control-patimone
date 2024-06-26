<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <form action="{{ route('corres-type.store') }}" method="POST" id="formCorrespondence-type">
            <div class="modal-header bg-gradient-gray-dark">
                <h5 class="modal-title" id="staticBackdropLabel">Create data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Source</label>
                    <select name="letter_source_id" class="form-control form-control-sm">
                        {!! getLetterSource() !!}
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Type</label>
                    <select name="type" class="form-control form-control-sm">
                        <option value="IN">IN</option>
                        <option value="OUT">OUT</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Correspondence type</label>
                    <input type="text" class="form-control form-control-sm data-focus"
                        placeholder="Correspondence type" name="corres_type">
                </div>
                <div class="mb-3">
                    <label class="form-label">Content template</label>
                    <input type="text" class="form-control form-control-sm data-focus"
                        placeholder="Format number template" name="content_template">
                </div>
                <div class="mb-3">
                    <label class="form-label">Attention</label>
                    <input type="text" class="form-control form-control-sm data-focus"
                        placeholder="attention" name="to_attention">
                </div>
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea class="text-area" id="description" name="description" cols="30" rows="2"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-sm btn-primary rounded-0"><i class='fas fa-save'></i>
                    Save</button>
                <button type="button" class="btn btn-sm btn-danger rounded-0" data-dismiss="modal"><i
                        class='fas fa-times'></i> Close</button>
            </div>
        </form>
    </div>
</div>
