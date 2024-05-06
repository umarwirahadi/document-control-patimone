<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <form action="{{ route('letter.store.reference') }}" method="POST" id="formLetterRefference">
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
                    <select name="source" class="form-control form-control-sm">
                       <option value="ENG">Engineer</option>
                       <option value="EMP">Employer</option>
                       <option value="CTR">Contractor</option>
                    </select>
                </div>
                    <div class="mb-3">                        
                        <label class="form-label">Search references</label>
                        <input type="hidden" name="letter_id_reference" id="letter_id_reference">
                        <input type="hidden" name="letter_id" id="letter_id" value="{{session('letter_id')}}">
                        <input type="text" name="autocomplete_select_reference" id="autocomplete_select_reference" data-url="{{route('letter.add.reference.autocomplete')}}" class="form-control form-control-sm">
                    </div>  
                    <div class="mb-3">                        
                        <label class="form-label">Subject</label>
                        <textarea name="subject" id="ref_subject" rows="3" class="form-control form-control-sm" readonly></textarea>
                    </div>  
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-sm btn-primary rounded-0"><i class='fas fa-save'></i> Save</button>
                <button type="reset" class="btn btn-sm btn-warning rounded-0"><i class='fas fa-redo-alt'></i> Reset</button>
                <button type="button" class="btn btn-sm btn-danger rounded-0" data-dismiss="modal"><i class='fas fa-times'></i> Close</button>
            </div>
        </form>
    </div>
</div>
