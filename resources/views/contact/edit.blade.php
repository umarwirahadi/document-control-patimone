<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <form action="{{ route('contact.update',$id) }}" method="POST" id="formContact">
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
                    <label class="form-label">Name</label>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">First name</span>
                                </div>
                                <input type="text" class="form-control" placeholder="First name" name="first_name" value="{{$first_name??''}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Last name</span>
                                </div>
                                <input type="text" class="form-control" placeholder="Last name" name="last_name" value="{{$last_name??''}}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Phone number</label>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Phone 1</span>
                                </div>
                                <input type="text" class="form-control" placeholder="Phone number ex: +628" name="phone_1" value="{{$phone_1??''}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Phone 2</span>
                                </div>
                                <input type="text" class="form-control" placeholder="Phone number ex: +628" name="phone_2" value="{{$phone_2??''}}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Primary</span>
                                </div>
                                <input type="email" autocomplete="off" class="form-control" placeholder="Primary email address" value="{{$primary_email??''}}"
                                name="primary_email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Alternative</span>
                                </div>
                                <input type="email" autocomplete="off" class="form-control" placeholder="alternative email" value="{{$secondary_email??''}}"
                        name="secondary_email">
                            </div>
                        </div>
                    </div>
                </div>             
                <div class="mb-3">
                    <label class="form-label">Type</label>
                    <select name="type" class="form-control">
                        <option value="contractor">Contractor</option>
                        <option value="subcontractor">Subcontractor</option>
                        <option value="engineer">Engineer</option>
                        <option value="employer">Employer</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-danger rounded-0" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-sm btn-primary rounded-0">Save</button>
            </div>
        </form>
    </div>
</div>
