<div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
        <form action="{{ route('eq.product.category.update',$id) }}" method="POST" id="formEqCategoryProduct">
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
                    <label class="form-label">Category code</label>
                    <input type="text" class="form-control data-focus" placeholder="Category code" name="category_code" value="{{$category_code ?? ''}}">
                </div>
                    <div class="mb-3">
                        <label class="form-label">Category name</label>
                        <input type="text" class="form-control data-focus" placeholder="Category name" name="category_name" value="{{$category_name ?? ''}}" >
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea name="category_description" class="form-control">{{$category_description ?? ''}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select name="category_status" class="form-control">
                            <option value="1" {{$category_status == '1' ? 'selected' : ''}} >Active</option>
                            <option value="0" {{$category_status == '0' ? 'selected' : ''}} >InActive</option>
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
