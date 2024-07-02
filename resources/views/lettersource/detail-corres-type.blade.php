@extends('layouts.index')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">{{ $title ?? '' }}</a></li>
                                <li class="breadcrumb-item" aria-current="page">{{ $title2 ?? '' }}</li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $title3 ?? '' }}</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-sm-6">
                        <div class="float-right">
                            <a href="{{ route('letter-source.index') }}"
                                class="btn btn-sm btn-danger btn-custom rounded-0"><i class="fas fa-arrow-left"></i>
                                Back</a>
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
                                <div class="form-group">
                                    <label for="exampleInputBorder">Code : </label>
                                    <input type="text" class="form-control form-control-sm form-control-border"
                                        value="{{ $data->source_code ?? '' }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputBorder">Name : </label>
                                    <input type="text" class="form-control form-control-sm form-control-border"
                                        value="{{ $data->source_name }}">
                                </div>
                               {{--  <div class="form-group">
                                    <label for="exampleInputBorder">Description : </label>
                                    <div class="">{!! $data->description ?? '' !!}</div>
                                </div> --}}
                                <div class="form-group">
                                    <label for="exampleInputBorder">Last updated :</label>
                                    <input type="text" class="form-control form-control-sm form-control-border"
                                        value="{{ \Carbon\Carbon::parse($data->updated_at)->diffForHumans() }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputBorder">Detail correspondence :</label>
                                    <div class="table-responsive">
                                        <table class="table table-sm table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Corres. Type</th>
                                                    <th>Status</th>
                                                    <th>Remark</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="datamodal" data-backdrop="static" tabindex="-1" role="dialog"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
    </div>
@endsection
