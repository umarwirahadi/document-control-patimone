<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <form action="{{ route('action-type.update',$id) }}" method="POST" id="formTypeOfAction">
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
                        <label class="form-label">Type of action</label>
                        <input type="text" class="form-control form-control-sm rounded-0" placeholder="Type of action" name="type_of_action" value="{{$type_of_action}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <input type="text" class="form-control form-control-sm rounded-0" placeholder="Description" name="description" value="{{$description}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Package</label>
                        <select name="package_id" class="form-control form-control-sm rounded-0">
                            {!!packageName($package_id)!!}
                        </select>
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
