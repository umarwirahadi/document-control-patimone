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
                      <a href="{{route('incoming.create')}}" class="btn btn-sm btn-primary rounded-0"><i
                              class="fas fa-plus-circle"></i> Add</a>
                      <button type="button" class="btn btn-sm btn-success rounded-0" id="btnRefreshPosition" data-url="{{route('engineer.index')}}"><i
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
              <div class="card card-primary card-tabs">
                <div class="card-header p-0 pt-1">
                  <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                    <li class="pt-2 px-3"><h3 class="card-title">Incoming</h3></li>
                    <li class="nav-item">
                      <a class="nav-link active" id="custom-tabs-two-home-tab" data-toggle="pill" href="#custom-tabs-two-home" role="tab" aria-controls="custom-tabs-two-home" aria-selected="true">Letter</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="custom-tabs-two-profile-tab" data-toggle="pill" href="#custom-tabs-two-profile" role="tab" aria-controls="custom-tabs-two-profile" aria-selected="false">Transmittal</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="custom-tabs-two-messages-tab" data-toggle="pill" href="#custom-tabs-two-messages" role="tab" aria-controls="custom-tabs-two-messages" aria-selected="false">IN-PMU</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="custom-tabs-two-settings-tab" data-toggle="pill" href="#custom-tabs-two-settings" role="tab" aria-controls="custom-tabs-two-settings" aria-selected="false">IN-KSOP</a>
                    </li>
                  </ul>
                </div>
                <div class="card-body">
                  <div class="tab-content" id="custom-tabs-two-tabContent">
                    <div class="tab-pane fade active show" id="custom-tabs-two-home" role="tabpanel" aria-labelledby="custom-tabs-two-home-tab">
                      <div class="table-responsives">
                        <table class="table table-sm table-bordered table-hover" id="data-letter" data-url="{{route('incoming.fetch.letter')}}" width="100%">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Date</th>
                              <th>Receive</th>
                              <th>Subject</th>
                              <th>References</th>
                              <th>Status</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody class="table-tbody">                        
                          </tbody>
                        </table>
                      </div> 
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-two-profile" role="tabpanel" aria-labelledby="custom-tabs-two-profile-tab">
                       
                      <div class="table-responsives">
                        <table class="table table-sm table-bordered table-hover" id="data-transmittal" data-url="{{route('incoming.fetch.letter')}}" width="100%">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Date</th>
                              <th>Receive</th>
                              <th>Subject</th>
                              <th>References</th>
                              <th>Status</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody class="table-tbody">                        
                          </tbody>
                        </table>
                      </div> 
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-two-messages" role="tabpanel" aria-labelledby="custom-tabs-two-messages-tab">

                      <div class="table-responsives">
                        <table class="table table-sm table-bordered table-hover" id="data-letter" data-url="{{route('incoming.fetch.letter')}}" width="100%">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Date</th>
                              <th>Receive</th>
                              <th>Subject</th>
                              <th>References</th>
                              <th>Status</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody class="table-tbody">                        
                          </tbody>
                        </table>
                      </div>                        
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-two-settings" role="tabpanel" aria-labelledby="custom-tabs-two-settings-tab">
                      <div class="table-responsives">
                        <table class="table table-sm table-bordered table-hover" id="data-letter" data-url="{{route('incoming.fetch.letter')}}" width="100%">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Date</th>
                              <th>Receive</th>
                              <th>Subject</th>
                              <th>References</th>
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
                <!-- /.card -->
              </div>
            </div>

          </div>
      </div>
  </div>
</div>
<div class="modal fade" id="datamodal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  
</div>
@endsection