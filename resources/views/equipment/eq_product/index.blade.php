@extends('layouts.index')
@section('content')
<div class="content-wrapper">
  <div class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
              <div class="col-sm-6">
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">{{$title ?? ''}}</a></li>
                      <li class="breadcrumb-item" aria-current="page">{{$title2 ?? ''}}</li>
                      <li class="breadcrumb-item active" aria-current="page">{{$title3 ?? ''}}</li>
                    </ol>
                  </nav>

              </div>
              <div class="col-sm-6">
                  <div class="float-right">
                      <a href="{{route('eq.product.create')}}" class="btn btn-sm btn-success btn-custom rounded-0"><i
                              class="fas fa-pencil-alt"></i> Create</a>
                    <a href="{{route('eq.product.category.export')}}" class="btn btn-sm btn-info btn-custom rounded-0">Export data</a>
                      <button type="button" class="btn btn-sm btn-primary btn-custom rounded-0" id="btnRefreshPosition" data-url="{{route('corres-type.index')}}"><i
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
                  <div class="card card-primary card-outline">

                      <div class="card-body">
                        <div class="table-responsivesss">
                          <table class="table table-sm table-hover table-bordered" id="data-eq-product" data-url="{{route('eq.product.fetch')}}">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Code</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Qty</th>
                                <th>Package</th>
                                <th>Description</th>
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
