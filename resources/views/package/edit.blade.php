<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <form action="{{ route('package.update',$id) }}" method="POST" id="formPackage">
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
                    <label class="form-label">Package name</label>
                    <input type="text" class="form-control" placeholder="Package name" name="package_name" value="{{$package_name??''}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Total days</label>
                    <input type="number" class="form-control" placeholder="total days" name="total_days" value="{{$total_days??''}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Start date</label>
                    <input type="date" class="form-control" placeholder="start date" name="start_date" value="{{$start_date??''}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">End date</label>
                    <input type="date" class="form-control" placeholder="end date" name="end_date" value="{{$end_date??''}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea name="description" rows="5" class="form-control">{{$description??''}}</textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <select name="status" class="form-control">
                        <option value="1" {{$status==1?'selected':''}}>Active</option>
                        <option value="0" {{$status==0?'selected':''}}>Not Active</option>
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
