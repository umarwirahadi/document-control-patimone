<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <form action="{{ route('letter-source.store') }}" method="POST" id="formLetterSource">
            <div class="modal-header bg-gradient-gray-dark">
                <h5 class="modal-title" id="staticBackdropLabel">Add Reference</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Source</label>
                    <select name="package_id" class="form-control form-control-sm">
                       <option value="engineer">Engineer</option>
                       <option value="employer">Employer</option>
                       <option value="contractor">Contractor</option>
                    </select>
                </div>
                    <div class="mb-3">                        
                        <label class="form-label">Search references</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-search"></i></span>
                            </div>
                            <input type="text" class="form-control form-control-sm" placeholder="add keyword ex. number" name="source_name" >
                          </div>
                    </div>                          
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-sm btn-primary rounded-0"><i class='fas fa-save'></i> Save</button>
                <button type="button" class="btn btn-sm btn-danger rounded-0" data-dismiss="modal"><i class='fas fa-times'></i> Close</button>
            </div>
        </form>
    </div>
</div>
