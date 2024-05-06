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
                      <button type="button" class="btn btn-sm btn-success btn-custom rounded-0" data-url="{{route('user.create')}}" id="btnCreate"><i
                              class="fas fa-pencil-alt"></i> Create</button>
                      <button type="button" class="btn btn-sm btn-primary btn-custom rounded-0" id="btnRefreshPosition" data-url="{{route('position.index')}}"><i
                              class="fas fa-history"></i> Refresh</button>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="content">
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-12">
                  <div class="card card-default">                      
                      <div class="card-body">
                        <div class="table-responsivesss">
                          <table class="table table-sm table-hover" id="data-users" data-url="{{route('user.fetch')}}">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Level</th>
                                <th>Status</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody class="table-tbody">                        
                            </tbody>
                          </table>
                        </div>
                      </div>
                  </div>
              </div>

          </div>
      </div>
  </div>
</div>
<div class="modal fade" id="datamodal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
</div>
@endsection