<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <form action="{{ route('item.update',$id) }}" method="POST" id="formItem">
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
                    <label class="form-label">Code</label>
                    <input type="text" class="form-control" placeholder="code item" name="item_code" value="{{$item_code??''}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Item name</label>
                    <input type="text" class="form-control" placeholder="item name" name="item_name" value="{{$item_name??''}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Category</label>
                    <select name="item_category" class="form-control">
                        <option {{$item_category == 'letter-receive' ? 'selected':''}} value="letter-receive">letter-receive</option>
                        <option {{$item_category == 'status-active' ? 'selected':''}} value="status-active">status-active</option>
                        <option {{$item_category == 'letter-type' ? 'selected':''}} value="letter-type">letter-type</option>
                        <option {{$item_category == 'type-of-action' ? 'selected':''}} value="type-of-action">type-of-action</option>
                        <option {{$item_category == 'user-type' ? 'selected':''}} value="user-type">User type</option>
                        <option {{$item_category == 'other">' ? 'selected':''}} value="other">Other</option>
                    </select>
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
                <button type="submit" class="btn btn-sm btn-primary rounded-0"><i class='fas fa-save'></i> Update</button>
                <button type="button" class="btn btn-sm btn-danger rounded-0" data-dismiss="modal"><i class='fas fa-times'></i> Close</button>
            </div>
        </form>
    </div>
</div>
