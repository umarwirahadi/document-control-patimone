  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
        <form action="{{ route('engineer.email.store') }}" method="POST" id="formEmail">
            <div class="modal-header bg-gradient-gray-dark">
                <h5 class="modal-title" id="staticBackdropLabel">Create data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @csrf                  
                <div class="mb-3">
                   
                    <div class="row">
                        <div class="col-md-9">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control form-control-sm rounded-0 " placeholder="new email address"
                                name="email">
                                <input type="hidden" name="engineer_id" value="{{$engineer_id}}">
                        </div> 
                        <div class="col-md-3">
                                <label class="form-label">Status</label>
                                <select name="status" class="form-control form-control-sm rounded-0">
                                    <option value="1" selected>Active</option>
                                    <option value="0">InActive</option>
                                </select>
                            
                        </div>                       
                    </div>
                </div>               
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered table-sm table-hover">
                            <thead>
                                <tr>
                                  <th>No</th>
                                  <th>Email</th>
                                  <th>Status</th>
                                  <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="engineerEmail">
                                @foreach ($emails as $no=>$item)
                                    <tr>
                                      <td>{{$no+1}}</td>
                                      <td>{{$item->email}}</td>
                                      <td>{!!$item->status == 1 ? 'active' :'not active'!!}</td>
                                      <td>
                                        <button type="button" class="btn btn-xs btn-primary rounded-0 edit-form" data-id="{{$item->id}}" data-url="{{route('engineer.email.edit',$item->id)}}"><i class='fas fa-pencil-alt'></i> edit</button>
                                        <button type="button" class="btn btn-xs btn-danger rounded-0 delete" id="destroy{{$item->id}}" data-url="{{route('engineer.email.destroy',$item->id)}}" data-id="{{$item->id}}"><i class='fas fa-times'></i> delete</button>
                                      </td>
                                    </tr>
                                @endforeach
                            </tbody>
                          </table>
                    </div>
                </div>
                             
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-xs btn-success rounded-0"><i class='fas fa-save'></i> Save</button>
                <button type="button" class="btn btn-xs btn-danger rounded-0" data-dismiss="modal"><i class='fas fa-times'></i> Close</button>
            </div>
        </form>
    </div>
</div>
