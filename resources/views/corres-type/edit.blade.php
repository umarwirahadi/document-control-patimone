<div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
        <form action="{{ route('corres-type.update',$id) }}" method="POST" id="formCorrespondence-type">
            <div class="modal-header bg-gradient-gray-dark">
                <h5 class="modal-title" id="staticBackdropLabel">Edit data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @csrf
                @method('put')
                    <div class="mb-3">
                        <label class="form-label">Correspondence type</label>
                        <input type="text" class="form-control" placeholder="Letter source name" name="correspondence_type" value="{{$correspondence_type ?? ''}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Type</label>
                        <select name="type" class="form-control">
                            <option value="IN" {{$type == 'IN' ? 'selected':''}}>IN</option>
                            <option value="OUT" {{$type == 'OUT' ? 'selected':''}}>OUT</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea class="text-area" id="description" name="description" rows="2">{{$description ?? ''}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        {{-- <textarea class="text-area" id="description" name="description" rows="2">{{$description ?? ''}}</textarea> --}}
                        <input type="text" class="form-control form-control-sm" name="content_template" id="content_template" value="{{$content_template??''}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select name="status" class="form-control">
                            <option value="1" {{$status == 1 ? 'selected':''}}>Active</option>
                            <option value="0" {{$status == 0 ? 'selected':''}}>InActive</option>
                        </select>
                    </div>                    
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-sm btn-primary rounded-0"><i class='fas fa-save'></i> Update</button>
                <button type="button" class="btn btn-sm btn-danger rounded-0" data-dismiss="modal"><i class='fas fa-times'></i> Close</button>
            </div>
        </form>
    </div>
</div>
