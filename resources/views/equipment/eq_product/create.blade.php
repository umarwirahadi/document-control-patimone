@extends('layouts.index')
@section('content')
<div class="content-wrapper">
  <form action="{{route('eq.product.store')}}" method="POST" id="formSubmitLetter">
    @csrf
    <input type="hidden" name="letter_id" value="{{session('letter_id')}}">
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
                    <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-save"></i> Save</button>
                      <a href="{{route('eq.product.index')}}" class="btn btn-sm btn-danger rounded-0"><i
                              class="fas fa-history"></i> Cancel</a>
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
                      <div class="input-group input-group-sm mb-3">
                        <select class="form-control form-control-sm" name="package_id" >
                          {!!packageName()!!}
                        </select>
                        </div>
                    </div>
                  </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="form-label">Category name</label>
                    <select name="eq_product_category_id" id="eq_product_category_id" class="form-control form-control-sm">
                        @foreach ($categories as $val)
                            <option value="{{$val->id}}">{{$val->category_code}}-{{$val->category_name}}</option>
                        @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label class="form-label">Date</label>
                    {{-- <input type="text" name="code" class="form-control form-control-sm"> --}}
                    <input type="text" name="eq_date" class="form-control form-control-sm date-picker" placeholder="--select--" id="eq_date">
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control form-control-sm">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="qty">Qty</label>
                        <input type="text" name="qty" id="qty" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="unit">Unit</label>
                        <select name="unit" id="unit" class="form-control form-control-sm">
                            <option value="unit">Unit</option>
                            <option value="box">Box</option>
                            <option value="pcs">pcs</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="brand_name">Brand name</label>
                        <input type="text" name="brand_name" id="brand_name" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="model_name">Model name</label>
                        <input type="text" name="model_name" id="model_name" class="form-control form-control-sm">
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                    <label for="specification"> Specification</label>
                    <textarea name="specification" id="specification" ></textarea>
                </div>
              </div>
              <div class="row">

                 <div class="col-md-3">
                  <div class="form-group">
                    <label>References</label>
                    <input type="text" name="references" id="references" class="form-control form-control-sm">
                  </div>
                 </div>
                 <div class="col-md-6">
                  <div class="form-group">
                    <label>Remark</label>
                    <input type="text" name="remark" id="remark" class="form-control form-control-sm">
                  </div>
                 </div>
                </div>
                   <div class="row">

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="warranty">Warranty</label>
                        <input type="text" name="warranty" id="warranty" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="warranty_expired"> expired</label>
                        <input type="text" name="warranty_expired" class="form-control form-control-sm date-picker" placeholder="--select--" id="warranty_expired">
                    </div>
                </div>
              </div>


            </div>
            <div class="card-footer">
            </div>
          </div>
      </div>
  </div>
</form>
</div>
<div class="modal fade" id="datamodal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">

</div>

@endsection

@section('script')
<script type="application/javascript">
 var descriptionID=document.getElementById('specification');
          if(descriptionID){
              CKEDITOR.replace(descriptionID);
          }
  </script>
@endsection
