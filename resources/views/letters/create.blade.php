@extends('layouts.index')
@section('content')
<div class="content-wrapper">
  <form action="{{route('letter.store')}}" method="POST" id="formSubmitLetter">
    @csrf    
    <input type="hidden" name="letter_id" value="{{session('letter_id')}}">
  <div class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
              <div class="col-sm-6">
                  <h4 class="m-0 text-dark"> {{ $title ?? '' }}</h4>
              </div>
              <div class="col-sm-6">
                  <div class="float-right">
                    <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-save"></i> Save</button>
                    <a href="{{route('generate.pdf',session('letter_id'))}}" class="btn btn-sm btn-info"><i class="fas fa-print"></i> Print</a>
                    {{-- <form action="{{route('letter.close',session('letter_id'))}}" method="post" class="hidden" id="form-close-section">@csrf</form> --}}
                    <a href="javascript:void(0)" class="btn btn-sm btn-warning" id="btnCloseLetterSection" data-callback="{{route('letter.index')}}" data-url="{{route('letter.close',session('letter_id'))}}" ><i class="fas fa-times"></i> Close</a>
                      <a href="{{route('rfi.index')}}" class="btn btn-sm btn-danger rounded-0"><i
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
                <input type="hidden" name="package_id" value="">                                          
                <div class="col-md-1">
                  <div class="form-group">                    
                    <label class="form-label">Doc. date</label>
                    <input type="text" name="letter_date" class="form-control form-control-sm date-picker" placeholder="--select--" id="letter_date" value="{{Carbon\carbon::parse($data->letter_date)->format('d-M-y')}}">
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group">                    
                    <label class="form-label">Receive date</label>
                    <input type="text" name="received_date" class="form-control form-control-sm date-picker" placeholder="--select--" value="{{Carbon\carbon::parse($data->received_date)->format('d-M-y')}}">
                  </div>
                </div> 
                <div class="col-md-1">
                  <div class="form-group">                    
                    <label class="form-label">Receive by</label>
                    <select name="received_by" id="received_by" class="form-control form-control-sm">
                      {!!getItem('receive-letter-by',$data->received_by)!!}
                    </select>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">                    
                    <label class="form-label">From:</label>
                    <select name="letter_source_id" id="letter_source_id" class="form-control form-control-sm">
                        @foreach ($lettersource as $item)
                            <option value="{{$item->id}}">{{$item->source_name}}</option>
                        @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">                    
                    <label class="form-label">Correspondence type:</label>
                    <select name="correspondence_type" id="correspondence_type" class="form-control form-control-sm" data-url="{{route('letter.get.content.template')}}">
                      @foreach ($correspondencetype as $item)
                          <option value="{{$item->id}}">{{$item->correspondence_type}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>                               
                <div class="col-md-2">
                    <div class="form-group">                      
                      <label>To/attention:</label>
                      <input type="text" name="attention_to" id="attention_to" class="form-control form-control-sm" placeholder="type the name specified" value="{{$data->attention_to ?? ''}}">
                    </div>
                  </div>
                <div class="col-md-3">
                    <div class="form-group">                      
                      <label>Letter Ref. no:</label>                      
                      <input type="text" name="letter_ref_no" class="form-control form-control-sm" value="{{$data->letter_ref_no ?? ''}}" id="letter_ref_no">
                    </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Subject:</label>
                    <input type="text" name="subject" id="subject" class="form-control form-control-sm" value="{{$data->subject ?? ''}}">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">                                 
                  <div class="form-group">                    
                    <label>Assign(s) to: 
                      @php
                          $assigns = array();
                      @endphp
                      @foreach ($data->assignments as $item)
                      @if ($item->action == '1')
                        @php
                            $assigns[]=['id'=>$item->engineer_id,'text'=>$item->engineer->full_name];
                        @endphp                              
                      @endif
                      @endforeach
                      <input type="hidden" value="{{json_encode($assigns)}}" id="datajsonAssign">
                    </label>
                    <div class="input-group input-group-sm mb-3">
                      <select class="form-control form-control-sm" name="assign_to[]" id="assign_to" multiple="multiple" data-url="{{route('engineer.select2')}}">                  
                      </select> 
                      <div class="input-group-append">
                        <button type="button" class="btn btn-sm btn-primary btnCopyAssign" data-url="{{route('letter.copy.email.assign',[session('letter_id'),'1'])}}" title="copy email list for action"><i class="fas fa-copy"></i></button>
                      </div>
                      </div>
                    
                  </div>
                </div>
                 <div class="col-md-6">
                  <div class="form-group">
                    <label>For reference(s):</label>
                      @php
                          $refs = array();
                      @endphp
                      @foreach ($data->references as $ref)
                      @php
                          $refs[]=['id'=>$ref->engineer_id,'text'=>$ref->engineer->full_name];
                      @endphp    
                      @endforeach
                      <input type="hidden" value="{{json_encode($refs)}}" id="datajsonReference">
                      <div class="input-group input-group-sm sm-3">
                        <select class="form-control form-control-sm" name="for_reference[]" id="for_reference" multiple="multiple" data-url="{{route('engineer.select2')}}">                     
                        </select>
                        <div class="input-group-append">
                          <button type="button" class="btn btn-sm btn-info btnCopyAssign" data-url="{{route('letter.copy.email.assign',[session('letter_id'),'2'])}}" title="copy email list for reference(s)"><i class="fas fa-copy"></i></button>
                        </div>
                      </div>
                  </div>
                 </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Response request:</label>
                      <select name="response_required" id="response_required" class="form-control form-control-sm data-select" >
                        {!!getItem('response-request',$data->response_required)!!}
                      </select>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <label>Rev:</label>
                      <select name="rev" id="rev" class="form-control form-control-sm data-select" >
                        <option value="0" {{$data->rev ? "selected" : ""}}>0</option>
                        <option value="1" {{$data->rev ? "selected" : ""}}>1</option>
                        <option value="2" {{$data->rev ? "selected" : ""}}>2</option>
                        <option value="3" {{$data->rev ? "selected" : ""}}>3</option>
                        <option value="4" {{$data->rev ? "selected" : ""}}>4</option>
                        <option value="5" {{$data->rev ? "selected" : ""}}>5</option>
                        <option value="6" {{$data->rev ? "selected" : ""}}>6</option>
                        <option value="7" {{$data->rev ? "selected" : ""}}>7</option>
                        <option value="8" {{$data->rev ? "selected" : ""}}>8</option>
                        <option value="9" {{$data->rev ? "selected" : ""}}>9</option>
                        <option value="10" {{$data->rev ? "selected" : ""}}>10</option>
                        <option value="11" {{$data->rev ? "selected" : ""}}>11</option>
                        <option value="12" {{$data->rev ? "selected" : ""}}>12</option>
                        <option value="13" {{$data->rev ? "selected" : ""}}>13</option>
                        <option value="14" {{$data->rev ? "selected" : ""}}>14</option>
                        <option value="15" {{$data->rev ? "selected" : ""}}>15</option>
                        <option value="16" {{$data->rev ? "selected" : ""}}>16</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-7">
                    <div class="form-group">
                      <label>Description:</label>
                      <input type="text" name="description" id="description" class="form-control form-control-sm">
                    </div>
                  </div>                                           
                </div> 
              <div class="row">
                <div class="col-md-12">
                  <button type="button" class="btn btn-sm bg-gradient-olive rounded-4 mb-2" id="btnAddReference" data-url="{{route('letter.add.reference')}}"><span class="fas fa-plus-circle"></span> Reference</button>                    
                  <div>
                    <div class="table-responsive">
                      <table class="table table-sm table-bordered table-hover table-striped">
                        <thead class="bg-gradient-olive">
                          <tr>
                            <th style="width:2%">No.</th>
                            <th style="width:15%">Reference</th>
                            <th style="width:70%">Subject</th>
                            <th style="width:5%">Source</th>
                            <th style="width:8%">Action</th>
                          </tr>
                        </thead>
                        <tbody id="document-reference">                        
                          @foreach ($data->referencesDoc as $key => $reference)
                          <tr>
                            <td>{{$key+1}}</td>
                            <td><a href="#" class="link">{{$reference->reference_number}}</a></td>
                            <td>{{$reference->subject}}</td>
                            <td>{!!$reference->source == 'CTR' ? '<span class="badge badge-danger">CTR</span>':(($reference->source == 'ENG') ? '<span class="badge badge-success">ENG</span>': '<span class="badge badge-info">EMP</span>')!!}</td>
                            <td>
                              <button type="button" data-id="{{$reference->id}}" id="view_{{$reference->id}}" data-url="{{route('letter.edit.reference',$reference->id)}}" class="btn btn-xs btn-info btn-view-reference" title="view document"><span class="fas fa-search"></span></button>
                              <button type="button" data-id="{{$reference->id}}" id="edit_{{$reference->id}}" data-url="{{route('letter.edit.reference',$reference->id)}}" class="btn btn-xs btn-primary btn-edit-reference" title="edit reference"><span class="far fa-edit"></span></button>
                              <button type="button" data-id="{{$reference->id}}" id="destroy_{{$reference->id}}" data-url="{{route('letter.destroy.reference',$reference->id)}}" class="btn btn-xs btn-danger btn-delete-reference" title="delete reference"><span class="fas fa-times"></span></button>
                            </td>                          
                          </tr>
                              
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>                                                      
                <div class="row">
                  <div class="col-md-12">
                    <button type="button" class="btn btn-sm bg-gradient-primary rounded-4 mb-2" id="btnAddAttachment" data-url="{{route('letter.add.attachment')}}"><span class="fas fa-link"></span> Attachment</button>
                    <div>
                      <table class="table table-sm table-bordered table-hover">
                        <thead class="bg-gradient-primary">
                          <tr>
                            <th style="width: 3%">No.</th>
                            <th style="width: 35%">Name</th>
                            <th style="width: 32%">Doc. type</th>
                            <th style="width: 15%">Link</th>
                            <th style="width: 10%">Action</th>
                          </tr>
                        </thead>
                        <tbody id="document-attachment">
                          @foreach ($data->attachments as $key=>$attachment)
                              <tr>
                                <td>{{++$key}}</td>
                                <td>{!!$attachment->file_name!!}</td>
                                <td>{{$attachment->documentType->document_type_name}}</td>
                                <td>
                                  @if ($attachment->file_link1)
                                      <a href="{{$attachment->file_link1}}" target="__blank" class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Link 1,</a>
                                  @endif
                                  @if ($attachment->file_link2)
                                      <a href="{{$attachment->file_link2}}" target="__blank" class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Link 2,</a>
                                  @endif
                                  @if ($attachment->file_link3)
                                      <a href="{{$attachment->file_link3}}" target="__blank" class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Link 3</a>
                                  @endif
                                </td>
                                <td>
                                  <button type="button" data-id="{{$attachment->id}}" id="edit_{{$attachment->id}}" data-url="{{route('letter.edit.attachment',$attachment->id)}}" class="btn btn-xs btn-primary btn-edit-attachment" title="edit attachment"><span class="far fa-edit"></span></button>
                                  <button type="button" data-id="{{$attachment->id}}" id="destroy_{{$attachment->id}}" data-url="{{route('letter.destroy.attachment',$attachment->id)}}" class="btn btn-xs btn-danger btn-delete-attachment" title="delete attachment"><span class="fas fa-trash"></span></button>
                                </td>
                              </tr>
                          @endforeach                         
                        </tbody>
                      </table>
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
var assignTo=document.getElementById('datajsonAssign').value;
var forReferences=document.getElementById('datajsonReference').value;

  $(document).ready(function(){    
 /*  ClassicEditor
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
        */
      })
  </script>    
@endsection