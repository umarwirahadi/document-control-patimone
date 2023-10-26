@extends('layouts.index')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h4 class="m-0 text-dark"> {{ $title ?? '' }}</h4>
                    </div>
                    <div class="col-sm-6">
                        <div class="float-right">
                            <a href="{{ route('engineer.index') }}" class="btn btn-sm btn-primary rounded-0" ><i class="fas fa-history"></i> Back</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <form action="{{route('engineer.storephoto')}}" id="formPhoto" method="POST">
                            @csrf
                            <input type="hidden" name="engineer_id" value="{{$data->id??''}}">
                        <div class="card card-default">
                            <div class="card-body text-center">
                              @php
                                  $img=$data->photo_profile ?? 'no-profile.jpg';
                              @endphp
                                <img src="{{asset('storage/photo/'.$img)}}" alt="engineer" class="img-fluid" width="200px" height="200px" id="photo-preview">
                                <input type="file" name="photo_profile" id="photo_profile" class="form-control" accept="image/png, image/jpg, image/jpeg">
                            </div>
                            <div class="card-footer"></div>
                            <button type="submit" class="btn btn-primary">Upload</button>
                        </div>
                    </form>
                    </div>
                    <div class="col-md-8">
                        <div class="card card-default">
                            <div class="card-body">
                                <form class="form-horizontal">
                                    <div class="form-group row">
                                      <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" value="{{$data->eng_first_name??''}} {{$data->eng_last_name??''}} ({{$data->initial}})" disabled>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputSkills" class="col-sm-2 col-form-label">Type</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" value="{{$data->type??''}}" disabled>
                                        </div>
                                      </div>  
                                    <div class="form-group row">
                                        <label for="inputSkills" class="col-sm-2 col-form-label">Dicipline</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" >
                                        </div>
                                      </div>  
                                    <div class="form-group row">
                                      <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                      <div class="col-sm-10">
                                        <input type="email" class="form-control" value="{{$data->eng_email??''}}" disabled>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label for="inputName2" class="col-sm-2 col-form-label">Mobile phone</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" value="{{$data->eng_phone??''}}" disabled>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                                      <div class="col-sm-10">
                                        <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                                      </div>
                                    </div>
                                                                
                                 
                                  </form>
                            </div>
                            <div class="card-footer"></div>
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
