<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <form action="{{ route('letter.store.attachment') }}" method="POST" id="formAttachment">
            <div class="modal-header bg-gradient-gray-dark">
                <h5 class="modal-title" id="staticBackdropLabel">Attachment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @csrf
                <input type="hidden" name="letter_id" id="letter_id" value="{{session('letter_id')}}">
                <div class="mb-3">
                    <label class="form-label">Doc Name/File name</label>
                    <textarea class="text-area" id="file_name" name="file_name" cols="30" rows="2"></textarea>                    
                    {{-- <input type="text" name="file_name" id="file_name" class="form-control form-control-sm rounded-0" placeholder="File name of attachment"> --}}
                </div>
                <div class="mb-3">                        
                    <label class="form-label">Link</label>
                        <input type="text" name="file_link1" id="file_link1" class="form-control form-control-sm rounded-0" placeholder="Paste the link from cloud here..!">
                </div> 
                <div class="mb-3">                        
                    <label class="form-label">Alternative Link 1</label>
                        <input type="text" name="file_link2" id="file_link2" class="form-control form-control-sm rounded-0" placeholder="Paste the alternative link from cloud here..!">
                </div> 
                <div class="mb-3">                        
                    <label class="form-label">Alternative Link 2 (optional)</label>
                        <input type="text" name="file_link3" id="file_link3" class="form-control form-control-sm rounded-0" placeholder="Paste the alternative link 2 from cloud here..!">
                </div> 
                <div class="mb-3">                        
                        <label>Document type</label>
                        <select name="document_type_id" id="document_type_id" class="form-control form-control-sm rounded-0" >
                       @foreach ($documentTypes as $document)
                           <option value="{{$document->id}}">{{$document->document_type_name}}</option>
                       @endforeach
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
