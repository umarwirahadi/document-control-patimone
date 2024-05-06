<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <form action="{{ route('letter.update.reference',$reference->id) }}" method="POST" id="formLetterRefference">
            <div class="modal-header bg-gradient-gray-dark">
                <h5 class="modal-title" id="staticBackdropLabel">Edit Reference</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label class="form-label">Source</label>
                    <select name="source" class="form-control form-control-sm">
                       <option value="ENG" {{$reference->source == 'ENG' ? 'selected' : ''}}>Engineer</option>
                       <option value="EMP" {{$reference->source == 'EMP' ? 'selected' : ''}}>Employer</option>
                       <option value="CTR" {{$reference->source == 'CTR' ? 'selected' : ''}}>Contractor</option>
                    </select>
                </div>
                    <div class="mb-3">                        
                        <label class="form-label">Search references</label>
                        <input type="hidden" name="letter_id_reference" id="letter_id_reference" value="{{$reference->letter_id_reference}}">
                        <input type="hidden" name="letter_id" id="letter_id" value="{{$reference->letter_id}}">
                        <input type="text" name="autocomplete_select_reference" id="autocomplete_select_reference" data-url="{{route('letter.add.reference.autocomplete')}}" class="form-control form-control-sm" value="{{$reference->reference_number}}">
                    </div>  
                    <div class="mb-3">                        
                        <label class="form-label">Subject</label>
                        <textarea name="subject" id="ref_subject" rows="3" class="form-control form-control-sm" readonly>{{$reference->subject}}</textarea>
                    </div>  
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-sm btn-primary rounded-0"><i class='fas fa-save'></i> Update</button>     
                <button type="reset" class="d-none"><i class='fas fa-redo-alt'></i> Reset</button>           
                <button type="button" class="btn btn-sm btn-danger rounded-0" data-dismiss="modal"><i class='fas fa-times'></i> Close</button>
            </div>
        </form>
    </div>
</div>
