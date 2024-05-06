@extends('layouts.index')
@section('content')
<div class="content-wrapper">
  <div class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
              <div class="col-sm-6">
                  <h4 class="m-0 text-dark"> {{ $title ?? '' }}</h4>
                  @error('type')
                  <div class="alert alert-danger alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Warning!</strong> {{$message}}
                  </div>
                  @enderror
              </div>
              <div class="col-sm-6">
                  <div class="float-right">
                    <form action="{{route('letter.create')}}" class="hidden" method="POST" id="formCreateLetter">
                      @csrf
                      <input type="hidden" name="type" value="IN">
                      <input type="hidden" name="package_id" value="{{auth()->user()->package_id}}">
                    </form>                    
                      <a href="javascript:void(0)" class="btn btn-sm btn-primary btn-custom rounded-0" onclick="event.preventDefault();document.getElementById('formCreateLetter').submit()"><i
                              class="fas fa-plus-circle"></i> 
                              @if (\Session::has('letter_id'))
                                Continue                                  
                              @else
                                Create
                              @endif
                            </a>
                      <a href="{{route('rfi.index')}}" class="btn btn-sm btn-success btn-custom rounded-0"><i
                              class="fas fa-history"></i> Refresh</a>
                  </div>
              </div>
             
          </div>
      </div>
  </div> 
  <div class="content">
      <div class="container-fluid">

        <div class="card card-primary card-tabs">
          <div class="card-header p-0 pt-1">
            <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
              <li class="pt-2 px-3"><h3 class="card-title">Incoming</h3></li>
              <li class="nav-item">
                <a class="nav-link" id="custom-tabs-two-home-tab" data-toggle="pill" href="#custom-tabs-two-home" role="tab" aria-controls="custom-tabs-two-home" aria-selected="false">Summary</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" id="custom-tabs-two-letter-tab" data-toggle="pill" href="#custom-tabs-two-letter" role="tab" aria-controls="custom-tabs-two-profile" aria-selected="false">Letter <span class="badge badge-pill badge-danger">7.548</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-tabs-two-messages-tab" data-toggle="pill" href="#custom-tabs-two-messages" role="tab" aria-controls="custom-tabs-two-messages" aria-selected="false">Transmittal</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-tabs-two-settings-tab" data-toggle="pill" href="#custom-tabs-two-settings" role="tab" aria-controls="custom-tabs-two-settings" aria-selected="true">RFCI</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-tabs-two-crsi" data-toggle="pill" href="#custom-tabs-crsi" role="tab" aria-controls="custom-tabs-crsi" aria-selected="true">CRSI</a>
              </li>
            </ul>
          </div>
          <div class="card-body">
            <div class="tab-content" id="custom-tabs-two-tabContent">
              <div class="tab-pane fade" id="custom-tabs-two-home" role="tabpanel" aria-labelledby="custom-tabs-two-home-tab">
                <p>Summary tab</p>
              </div>
              <div class="tab-pane fade active show" id="custom-tabs-two-letter" role="tabpanel" aria-labelledby="custom-tabs-two-letter-tab">
                <div class="table-responsives">
                  <table class="table table-sm table-bordered table-hover" id="incoming-letter" data-url="{{route('incoming.letter.fetch')}}" width="100%">
                    <thead>
                      <tr>
                        {{-- <th>No</th> --}}
                        <th>Number</th>
                        <th>From</th>
                        <th>Date</th>
                        <th>Subject</th>
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
                  <table class="table table-sm table-bordered table-hover" id="incoming-transmittal" data-url="{{route('incoming.transmittal.fetch')}}" width="100%">
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
                 Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis vulputate. Morbi euismod molestie tristique. Vestibulum consectetur dolor a vestibulum pharetra. Donec interdum placerat urna nec pharetra. Etiam eget dapibus orci, eget aliquet urna. Nunc at consequat diam. Nunc et felis ut nisl commodo dignissim. In hac habitasse platea dictumst. Praesent imperdiet accumsan ex sit amet facilisis.
              </div>
              <div class="tab-pane fade" id="custom-tabs-two-crsi" role="tabpanel" aria-labelledby="custom-tabs-two-crsi">
                 Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis vulputate. Morbi euismod molestie tristique. Vestibulum consectetur dolor a vestibulum pharetra. Donec interdum placerat urna nec pharetra. Etiam eget dapibus orci, eget aliquet urna. Nunc at consequat diam. Nunc et felis ut nisl commodo dignissim. In hac habitasse platea dictumst. Praesent imperdiet accumsan ex sit amet facilisis.
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