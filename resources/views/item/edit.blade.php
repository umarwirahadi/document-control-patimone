<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <form action="{{ route('item.update',$id) }}" method="POST" id="formItem">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Edit data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @csrf
                @method('put')

                <div class="mb-3">
                    <label class="form-label">code</label>
                    <input type="text" class="form-control" placeholder="code item" name="item_code" value="{{$item_code??''}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">item name</label>
                    <input type="text" class="form-control" placeholder="item name" name="item_name" value="{{$item_name??''}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">category</label>
                    <select name="item_category" class="form-control">
                        <option value="letter-receive">letter-receive</option>
                        <option value="status-active">status-active</option>
                        <option value="letter-type">letter-type</option>
                        <option value="type-of-action">type-of-action</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label>Description</label>
                    <textarea name="item_description" rows="5" class="form-control">{{$item_description??''}}</textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <select name="item_status" class="form-control">
                        <option value="1" {{$item_status==1?'selected':''}}>Active</option>
                        <option value="0" {{$item_status==0?'selected':''}}>Not Active</option>
                    </select>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-danger rounded-0" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-sm btn-primary rounded-0">Update</button>
            </div>
        </form>
    </div>
</div>
