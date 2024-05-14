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
                          <table class="table table-sm table-hover table-bordered" id="data-users" data-url="{{route('user.fetch')}}">
                            <thead class="bg-cyan">
                              <tr>
                                <th style="width: 10%">No</th>
                                <th style="width: 25%">Name</th>
                                <th style="width: 25%">Email</th>
                                <th style="width: 10%">Level</th>
                                <th style="width: 20%">Action</th>
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