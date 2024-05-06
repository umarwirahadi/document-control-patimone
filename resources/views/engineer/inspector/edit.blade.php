<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <form action="{{ route('engineer.update',$id) }}" method="POST" id="formEngineer">
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
                <label class="form-label">Name</label>
                <div class="row">
                    <div class="col-md-5">
                        <input type="text" class="form-control" placeholder="Full name" value="{{$full_name}}"
                            name="full_name">
                    </div>
                    <div class="col-md-5">
                        <input type="text" class="form-control" placeholder="Nick name" name="nickname" value="{{$nickname}}">
                    </div>
                    <div class="col-md-2">
                        <input type="text" class="form-control" placeholder="Initial name" name="initial" value="{{$initial}}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="mb-3">
                        <label class="form-label">Phone number</label>
                        <input type="text" class="form-control" placeholder="Phone number ex: +628" name="phone1" value="{{$phone1}}">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-3">
                        <label class="form-label">Phone number 2</label>
                        <input type="text" class="form-control" placeholder="Phone number ex: +628" name="phone2" value="{{$phone2}}">
                    </div>
                </div>                                             
                <div class="col-md-3">
                    <div class="mb-3">
                        <label class="form-label">Type</label>
                        <select name="type" class="form-control">
                            <option {{$type =="engineer" ? "selected" :"" }} value="engineer">Engineer</option>
                            <option {{$type =="inspector" ? "selected" :"" }} value="inspector">Inspector</option>
                            <option {{$type =="ss" ? "selected" :"" }} value="ss">Supporting</option>
                            <option {{$type =="other" ? "selected" :"" }} value="other">Other</option>
                        </select>
                    </div>
                </div>    
                <div class="col-md-3">
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select name="status" class="form-control">
                            <option value="1" {{$status == 1 ? 'selected' : ''}}>Active</option>
                            <option value="0" {{$status == 0 ? 'selected' : ''}}>InActive</option>
                        </select>
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
