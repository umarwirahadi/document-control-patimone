@extends('layouts.index')
@section('content')
<div class="content-wrapper">
  <div class="content-header">
      <div class="container">
          <div class="row mb-2">
              <div class="col-sm-6">
                  <h4 class="m-0 text-dark"> {{ $data->title ?? 'RFI' }}</h4>
              </div>
              <div class="col-sm-6">
                  <div class="float-right">
                      <button type="button" class="btn btn-sm btn-primary rounded-0"><i
                              class="fas fa-plus-circle"></i> Add</button>
                      <button type="button" class="btn btn-sm btn-success rounded-0"><i
                              class="fas fa-history"></i> Refresh</button>

                  </div>

              </div>
          </div>
      </div>
  </div>
  <div class="content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="card card-default">
                      <div class="card-header">
                          <h3 class="card-title">{{ $data->title ?? '' }}</h3>
                          <div class="card-tools">
                              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                      class="fas fa-minus"></i></button>
                              <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                                      class="fas fa-times"></i></button>
                          </div>
                      </div>
                      <div class="card-body">
                        <div class="card-columns">
                            <div class="card bg-primary">
                                <div class="card-body text-center">
                                    <a href="" class="text text-link">PACKAGE 1</a>
                                </div>
                            </div>
                            <div class="card bg-primary">
                                <div class="card-body text-center">
                                    PACKAGE 2
                                </div>
                            </div>
                            <div class="card bg-primary">
                                <div class="card-body text-center">
                                    PACKAGE 3
                                </div>
                            </div>
                        </div>
                        </div>
                      <div class="card-footer"></div>
                  </div>
              </div>

          </div>
      </div>
  </div>
</div>
@endsection