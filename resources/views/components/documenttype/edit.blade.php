<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <form action="{{ route('documenttype.update',$id) }}" method="POST" id="formDocumentType">
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
                    <label class="form-label">Document type name</label>
                    <input type="text" class="form-control form-control-sm data-focus" placeholder="Document type name" name="document_type_name" value="{{$document_type_name ?? ''}}" >
                </div>
                <div class="mb-3">
                    <label class="form-label">Category</label>
                    <select name="category_id" class="form-control form-control-sm">
                        <option {{$category_id =='IN' ? "selected" :''}} value="IN">IN</option>
                        <option {{$category_id =='OUT' ? "selected" :''}} value="OUT">OUT</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Package</label>
                    <select name="package_id" class="form-control form-control-sm">
                        {!!packageName($package_id)!!}
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea class="text-area" id="description" name="description" cols="30" rows="2">{!!$description!!}</textarea>
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
