<div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
        <form action="{{ route('engineer.assignment.store') }}" method="POST" id="formAssignEngineer">
            <div class="modal-header bg-gradient-gray-dark">
                <h5 class="modal-title" id="staticBackdropLabel">Assignment user</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @csrf                  
                <div class="mb-3">
                    <label class="form-label">Full name</label>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="text" class="form-control rounded-0" name="full_name" value="{{$engineer->full_name}}" readonly>
                                <input type="hidden" name="engineer_id" value="{{$engineer->id}}">
                        </div>                        
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Position</label>
                    <div class="row">
                        <div class="col-md-12">
                            <select name="position_id" class="form-control rounded-0">
                                @foreach ($positions as $position)
                                    <option value="{{$position->id}}">{{$position->position_code}}-{{$position->position_name}}</option>
                                @endforeach
                            </select>

                        </div>                        
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <select name="status" class="form-control rounded-0">
                        <option value="1" selected>Active</option>
                        <option value="0">InActive</option>
                    </select>
                </div>                             
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-sm btn-primary rounded-0"><i class='fas fa-save'></i> Save</button>
                <button type="button" class="btn btn-sm btn-danger rounded-0" data-dismiss="modal"><i class='fas fa-times'></i> Close</button>
            </div>
        </form>
    </div>
</div>
