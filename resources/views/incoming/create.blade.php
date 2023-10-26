@extends('layouts.index')
@section('content')
<div class="content-wrapper">
  <div class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
              <div class="col-sm-6">
                  <h4 class="m-0 text-dark"> {{ $title ?? '' }}</h4>
              </div>
              <div class="col-sm-6">
                  <div class="float-right">
                      <button type="button" class="btn btn-sm btn-primary rounded-0" data-url="{{route('incoming.create')}}" id="btnCreate"><i
                              class="fas fa-plus-circle"></i> Add</button>
                      <a href="{{route('incoming.index')}}" class="btn btn-sm btn-danger rounded-0"><i
                              class="fas fa-history"></i> Back</a>

                  </div>

              </div>
          </div>
      </div>
  </div>
  <div class="content">
    <div class="container-fluid">
        <div class="card card-default">
            <div class="card-header">
              <h3 class="card-title"></h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-2">
                  <div class="form-group">
                    <label>Package</label>
                    <select class="form-control rounded-0" style="width: 100%;" name="package_id">
                      {!!packageName()!!}
                    </select>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Ref. Number</label>
                    <input type="text" name="incoming_ref_no" class="form-control rounded-0">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Date & time of Letter</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="far fa-calendar-alt"></i>
                        </span>
                      </div>
                      <input type="text" name="date_of_letter" class="form-control rounded-0 date-picker" value="{{date('Y-m-d')}}">
                      <input type="time" name="" class="form-control rounded-0">
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Date & time Receive</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="far fa-calendar-alt"></i>
                        </span>
                      </div>
                      <input type="text" name="date_of_letter" class="form-control rounded-0 date-picker">
                      <input type="time" name="" class="form-control rounded-0">
                    </div>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group">
                    <label>Due date</label>
                    <div class="input-group">

                      
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="far fa-calendar-alt"></i>
                          </span>
                        </div>
                      <input type="text" name="due_date" class="form-control rounded-0 date-picker">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-8">
                  <div class="form-group">
                    <label>Subject</label>
                    <input type="text" name="subject" class="form-control rounded-0">
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label>Received by</label>
                    <select class="form-control rounded-0" style="width: 100%;" name="type_of_receive">
                      {!!getItem('letter-receive')!!}
                    </select>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label>Response Request</label>
                    <select class="form-control rounded-0" style="width: 100%;" name="type_of_action">
                      {!!getItem('type-of-action')!!}
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    <label>References</label>
                    <input type="text" name="references" class="form-control rounded-0">
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label>Deliver Date to PM/TL</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="far fa-calendar-alt"></i>
                        </span>
                      </div>
                      <input type="text" name="date_delivered_pm" id="date_delivered_pm" class="form-control rounded-0 date-picker">

                    </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label>Engineers assigned</label>
                    <select class="form-control rounded-0 data-select" style="width: 100%;" name="package_id">
                      {!!packageName()!!}
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer">
              Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
              the plugin.
            </div>
          </div>

        
          
      </div>

  </div>
</div>
@endsection
