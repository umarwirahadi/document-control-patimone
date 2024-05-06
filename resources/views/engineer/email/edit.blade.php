<div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
        <form action="{{ route('engineer.email.update',$id) }}" method="POST" id="formEmail">
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
                    <label class="form-label">Email</label>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="email" class="form-control" placeholder="new email address"
                                name="email" value="{{$email}}">
                                <input type="hidden" name="engineer_id" value="{{$engineer_id}}">
                        </div>                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <input type="text" class="form-control" placeholder="description" name="description" value="{{$description}}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <select name="status" class="form-control">
                                <option value="1" {{$status == 1 ? 'selected' : ''}}>Active</option>
                                <option value="0" {{$status == 0 ? 'selected' : ''}}>InActive</option>
                            </select>
                        </div>
                    </div>                                             
                </div>                
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-sm btn-primary rounded-0"><i class='fas fa-save'></i> Update</button>
                <button type="button" class="btn btn-sm btn-danger rounded-0" data-dismiss="modal"><i class='fas fa-times'></i> Close</button>
            </div>
        </form>
    </div>
</div>
