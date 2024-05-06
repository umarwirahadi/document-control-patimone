<div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
        <form action="{{ route('letter-source.store') }}" method="POST" id="formAttachment">
            <div class="modal-header bg-gradient-gray-dark">
                <h5 class="modal-title" id="staticBackdropLabel">Print Disposition</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @csrf
                <input type="hidden" name="letter_id" id="letter_id">
                <div class="mb-3">
                    <label class="form-label">Attachment name</label>
                    <input type="text" name="" id="" class="form-control form-control-sm rounded-0" placeholder="File name of attachment">
                </div>
                <div class="mb-3">                        
                    <label class="form-label">Link</label>
                        <input type="text" name="" id="" class="form-control form-control-sm rounded-0" placeholder="Paste the link from cloud here..!">
                    </div>                                             
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-danger rounded-0" data-dismiss="modal"><i class='fas fa-times'></i> Close</button>
            </div>
        </form>
    </div>
</div>
