<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <form action="{{ route('user.assign.store') }}" method="POST" id="formAssignUserPackage">
            <div class="modal-header bg-gradient-gray-dark">
                <h5 class="modal-title" id="staticBackdropLabel">Assign user to access package of works</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @csrf
                <input type="hidden" name="user_id" value="{{$user->id}}">
                    <div class="mb-3">
                        <label class="form-label">Package name</label>                        
                        <select name="package_id" id="package_id" class="form-control form-control-sm">
                            {!!packageName()!!}
                        </select>
                    </div>                 
                    <div class="mb-3">
                        <label class="form-label">Level</label>
                        <select name="level" class="form-control form-control-sm">
                            <option value="user">User</option>
                            <option value="engineer">engineer</option>
                            <option value="dc">Document Controller</option>
                        </select>
                    </div>                                      
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select name="status" class="form-control form-control-sm">
                            <option value="1">Active</option>
                            <option value="0">Not Active</option>
                        </select>
                    </div>  
                    <div class="mb-3">
                        <div class="table-responsive">                           
                            <table class="table table-sm table-bordered table-hover" id="data-assign-package">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Package</th>
                                        <th>Level</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="data-assign-package-result">
                                    @foreach ($user->access as $val)
                                        <tr>
                                            <td>{!!packageNameLabel($val->package_id)!!}</td>
                                            <td>{{$val->level}}</td>
                                            <td>{!!$val->status == '1' ? '<span class="badge badge-success">Active</span>':'<span class="badge badge-danger">Not Active</span>'!!}</td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-primary rounded-0" data-url="{{route('user.assign.edit',$val->id)}}"><i class="fas fa-pencil-alt"></i></button>
                                                <button type="button" class="btn btn-sm btn-danger rounded-0 delete-assign-user" data-url="{{route('user.assign.destroy',$val->id)}}"><i class="far fa-trash-alt"></i></button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>                                    
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-sm btn-primary rounded-0"><i class="fas fa-save"></i> Save</button>
                <button type="button" class="btn btn-sm btn-danger rounded-0" data-dismiss="modal"><i class="fas fa-times-circle"></i> Close</button>
            </div>
        </form>
    </div>
</div>
