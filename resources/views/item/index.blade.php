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
                      <button type="button" class="btn btn-sm btn-primary rounded-0" data-url="{{route('item.create')}}" id="btnCreate"><i
                              class="fas fa-plus-circle"></i> Add</button>
                      <button type="button" class="btn btn-sm btn-success rounded-0" id="btnTest" data-url="{{route('package.fetch')}}"><i
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
                          <table class="table table-sm table-hover" id="data-item" data-url="{{route('item.fetch')}}">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Code</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Status</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody class="table-tbody">                        
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <div class="card-footer"></div>
                  </div>
              </div>

          </div>
      </div>
  </div>
</div>
<div class="modal fade" id="datamodal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  
</div>
@endsection