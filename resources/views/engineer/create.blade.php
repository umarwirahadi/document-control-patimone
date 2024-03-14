    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="{{ route('engineer.store') }}" method="POST" id="formEngineer">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Create</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @csrf
                   {{--  <div class="mb-3">
                        <label class="form-label">Engineer code</label>
                        <input type="text" class="form-control" placeholder="Code" name="eng_code">
                    </div> --}}
                    <div class="mb-3">
                        <label class="form-label">Full name</label>
                        <div class="row">
                            <div class="col-md-5">
                                <input type="text" class="form-control" placeholder="First name"
                                    name="eng_first_name">
                            </div>
                            <div class="col-md-5">
                                <input type="text" class="form-control" placeholder="Last name" name="eng_last_name">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" placeholder="initial" name="initial">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Phone number</label>
                                <input type="text" class="form-control" placeholder="Phone number ex: +628" name="eng_phone">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                        <label class="form-label">Primary email</label>
                        <input type="email" autocomplete="off" class="form-control" placeholder="email address"
                            name="eng_email">
                    </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                        <label class="form-label">Alternative email</label>
                        <input type="email" autocomplete="off" class="form-control" placeholder="alternative email"
                            name="eng_emil_alternate">

                    </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                        <label class="form-label">Assignment</label>
                        <select name="position_id" id="position_id">
                            @foreach ($positions as $item)
                                <option value="{{$item->id}}">{{$item->position_code}} - {{$item->position_name}}</option>
                            @endforeach
                        </select>
                        </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                        <label class="form-label">Type</label>
                        <select name="type" class="form-control">
                            {!!getItem('user-type')!!}
                        </select>
                    </div>
                        </div>
                    </div>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-danger rounded-0" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-sm btn-primary rounded-0">Save</button>
                </div>
            </form>
        </div>
    </div>
