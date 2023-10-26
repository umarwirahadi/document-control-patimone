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
                      <a href="{{route('rfi.index')}}" class="btn btn-sm btn-danger rounded-0"><i
                              class="fas fa-history"></i> Back</a>

                  </div>

              </div>
          </div>
      </div>
  </div>
  <div class="content ">
    
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
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Package</label>
                    <select class="form-control rounded-0" style="width: 100%;" name="package_id">
                      {!!packageName('9')!!}
                    </select>
                  </div>
                </div>
                
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Date</label>
                    <input type="text" class="form-control rounded-0" value="{{date('D d-M-y')}}" readonly>
                  </div>
                </div>
                
                <div class="col-md-6">
                    <div class="form-group">                      
                      <label>Ref. Number</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text">PTRPWJ-PTBP6-RFI-</span>
                       </div>
                      <input type="text" name="incoming_ref_no" class="form-control rounded-0" placeholder="Ex. 23/0001">
                     </div>
                    </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Spesification/Standard</label>
                    <input type="text" name="" id="" class="form-control rounded-0">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                      <label>Pay item no.</label>
                      <select name="pay_item_id" id="pay_item_id" class="form-control rounded-0">
                        </select>
                    </div>
                  </div>
                <div class="col-md-4">
                    <div class="form-group d-inline">
                      <label>Date & time for Inspection/Measurement                        
                      </label>
                      <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                <i class="far fa-calendar-alt"></i>
                              </span>
                            </div>
                            <input type="text" name="date_of_letter" class="form-control rounded-0 d-inline date-picker-2" placeholder="--select--">
                            <select name="" id="" class="form-control rounded-0 d-inline data-select" >
                                <option value="08:00">08:00</option>
                                <option value="09:00">09:00</option>
                                <option value="10:00">10:00</option>
                                <option value="11:00">11:00</option>
                                <option value="13:00">13:00</option>
                                <option value="14:00">14:00</option>
                                <option value="15:00">15:00</option>
                                <option value="16:00">16:00</option>
                              </select>
                              <div class="form-check ml-3">
                                <input type="checkbox" name="inspection_attachment" id="inspection_attachment" class="form-check-input">
                                  <label class="form-check-label" for="inspection_attachment">Schadule as attachment ?</label>
                              </div>
                      </div>
                    </div>
                  </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Location</label>
                    <input type="text" name="references" class="form-control rounded-0" placeholder="ex. Patimban Project site" value="Patimban Project site">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <h5 class="card-header"><b>QUALITY REPORT</b></h5>
                        <div class="card-body">
                            <button type="button" class="btn btn-sm btn-info rounded-0 mb-2 btn-custom" id="btnQtyRFI" data-url="{{route('rfi.quality.create')}}">Create <span class="fas fa-plus-circle"></span></button>
                          <div class="table-responsive">
                            <table class="table table-sm table-hover table-bordered">
                                <thead class="">
                                    <tr class="text-center bg-info">
                                        <th>No.</th>
                                        <th>Inspection Contents</th>
                                        <th>Doc/Ref./ITP no</th>
                                        <th>Form no</th>
                                        <th>&#128505;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Material/Vendor Approval Request for SPSP</td>
                                        <td><span class="badge badge-danger">PTRPWJ/PTBP6/ENGR/23/T-004b</span></td>
                                        <td></td>
                                        <td>
                                            <a href="#" class="btn btn-sm rounded-0 btn-info"><span class="fa fa-arrow-circle-down"></span></a>
                                            <button type="button" class="btn btn-sm rounded-0 btn-primary"><span class="fa fa-edit"></span></button>
                                            <button type="button" class="btn btn-sm rounded-0 btn-danger"><span class="fa fa-times"></span></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                          </div>
                        </div>
                      </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <h5 class="card-header"><b>QUANTITY REPORT</b></h5>
                        <div class="card-body">
                            <button type="button" class="btn btn-sm btn-info rounded-0 mb-2 btn-custom" id="btnQlyRFI" data-url="{{route('rfi.quanity.create')}}">Create <span class="fas fa-plus-circle"></span></button>
                            <div class="table-responsive">
                                <table class="table table-sm table-hover table-bordered">
                                    <thead>
                                        <tr class="text-center bg-info">
                                            <th>No.</th>
                                            <th>Detailed Description/Section/Location of the Activity to be Inspected</th>
                                            <th>Unit</th>
                                            <th>Design Quantity</th>
                                            <th>Description</th>
                                            <th>&#128505;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Fctory Inspection at J-Spiral Steel Pipe Co.,Ltd (JSP), Vietnam</td>
                                            <td class="text-center">Nr</td>
                                            <td class="text-center">1</td>
                                            <td></td>
                                            <td>
                                                <button type="button" class="btn btn-sm rounded-0 btn-primary"><span class="fa fa-edit"></span></button>
                                                <button type="button" class="btn btn-sm rounded-0 btn-danger"><span class="fa fa-times"></span></button>
                                            </td>
                                        </tr>
                                       
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="2" class="text-right"><b>TOTAL VOLUME</b></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tfoot>
                                </table>
    
                              </div>
                        </div>
                      </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Contractor's Notes</label>
                        <div id="contractor_notes"></div>
                      </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-8">
                  <label for="Upload">Upload file</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" accept="application/pdf">
                      <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                    </div>
                    <div class="input-group-append">
                      <button class="btn btn-outline-danger" type="button" id="inputGroupFileAddon04"> <span class="fa fa-upload"></span> Upload</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Attachment</label>
                        <div class="table-responsive">
                          <table class="table table-sm table-hover table-bordered">
                            <thead class="bg-info">
                              <tr class="text-center">
                                <td>No</td>
                                <td>Filename</td>
                                <td>Type</td>
                                <td>Size</td>
                                <td>Desc</td>
                                <th>&#128505;</th>
                              </tr>
                            </thead>
                            <tbody>

                            </tbody>
                          </table>
                      </div>
                      </div>
                </div>
              </div>
            </div>
            <div class="card-footer">
            </div>
          </div>

        
          
      </div>
  </div>
</div>
<div class="modal fade" id="datamodal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  
</div>

@endsection

@section('script')
<script type="application/javascript">
  $(document).ready(function(){
  ClassicEditor
          .create( document.querySelector( '#contractor_notes' ),{
            toolbar: {
                items: [
                    'undo', 'redo',
                    '|', 'heading',
                    '|', 'link',
                    '|', 'bulletedList', 'numberedList', 'outdent', 'indent'
                ],
                shouldNotGroupWhenFull: false
            }
          } )
          .catch( error => {
              console.error( error );
          } );
  
        })
  </script>    
@endsection