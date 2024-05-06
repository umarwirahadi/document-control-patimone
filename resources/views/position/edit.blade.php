<div class="modal-dialog" role="document">
    <div class="modal-content">
        <form action="{{ route('position.update',$id) }}" method="POST" id="formposition">
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
                        <input type="text" class="form-control" placeholder="Position code" name="position_code" value="{{$position_code ?? ''}}" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" placeholder="Position name" name="position_name" value="{{$position_name ?? ''}}">
                    </div>
                
                    <div class="mb-3">
                        <label class="form-label">Category {{$category}}</label>
                        <select name="category" class="form-control">
                            {!!getItem('user-type',$category)!!}
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
