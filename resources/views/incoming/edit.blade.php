<div class="modal-dialog" role="document">
    <div class="modal-content">
        <form action="{{ route('engineer.update',$id) }}" method="POST" id="formEngineer">
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
                        <label class="form-label">Engineer code</label>
                        <input type="text" class="form-control" placeholder="Code" name="eng_code" value="{{$eng_code??''}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Full name</label>
                        <div class="row">

                            <div class="col">
                                <input type="text" class="form-control" placeholder="First name" name="eng_first_name" value="{{$eng_first_name??''}}">

                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Last name" name="eng_last_name" value="{{$eng_last_name??''}}">

                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Initial</label>
                        <input type="text" class="form-control" placeholder="initial name" name="initial" value="{{$initial??''}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Phone number</label>
                        <input type="text" class="form-control" placeholder="Phone number ex: +628" name="eng_phone" value="{{$eng_phone??''}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Primary email</label>
                        <input type="email" autocomplete="off" class="form-control" placeholder="email address" name="eng_email" value="{{$eng_email??''}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Alternative email</label>
                        <input type="email" autocomplete="off" class="form-control" placeholder="alternative email" name="eng_emil_alternate" value="{{$eng_emil_alternate??''}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">is active ?</label>
                        <select name="eng_status" class="form-control">
                            <option value="1" {{$eng_status==1?'selected':''}}>Yes</option>
                            <option value="0" {{$eng_status==0?'selected':''}}>No</option>
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
