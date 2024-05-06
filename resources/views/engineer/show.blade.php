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
                            <a href="{{ route('engineer.index') }}" class="btn btn-sm btn-danger rounded-0" ><i class="fas fa-arrow-left"></i> Back</a>
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
                              @if ($data->photo_profile)
                                <img src="{{asset('storage/photo/'.$data->photo_profile)}}" alt="engineer" class="img-fluid" width="200px" height="200px" id="photo-preview">                                  
                                @else
                                <img src="{{asset('storage/photo/noprofile.png')}}" alt="engineer" class="img-fluid" width="200px" height="200px" id="photo-preview">                                                                    
                              @endif
                                <input type="file" name="photo_profile" id="photo_profile" class="form-control" accept="image/png, image/jpg, image/jpeg">
                            </div>
                            <div class="card-footer"></div>
                            <button type="submit" class="btn btn-primary">Upload Photo</button>
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
                                        <input type="text" class="form-control form-control-sm rounded-0" value="{{$data->full_name??''}} {{$data->eng_last_name??''}} ({{$data->initial}})" disabled>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputSkills" class="col-sm-2 col-form-label">Type</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control form-control-sm rounded-0" value="{{$data->type??''}}" disabled>
                                        </div>
                                      </div>                                                                    
                                    <div class="form-group row">
                                      <label for="inputName2" class="col-sm-2 col-form-label">Mobile phone</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-sm rounded-0" value="{{$data->phone1??'-'}} / {{$data->phone2??'-'}}" disabled>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label for="inputName2" class="col-sm-2 col-form-label">Email(s)</label>
                                      <div class="col-sm-10">
                                        <table class="table table-bordered table-sm table-hover" id="engineerEmail">
                                          <tr>
                                            <td>No.</td>
                                            <td>Email</td>
                                            <td>Status</td>
                                            <td>Action</td>
                                          </tr>
                                          @foreach ($emails as $no=>$item)
                                              <tr>
                                                <td>{{$no+1}}</td>
                                                <td>{{$item->email}}</td>
                                                <td>{!!$item->status == 1 ? 'active' :'not active'!!}</td>
                                                <td>
                                                  <button type="button" class="btn btn-xs btn-primary rounded-0 edit-form" data-id="{{$item->id}}" data-url="{{route('engineer.email.edit',$item->id)}}"><i class='fas fa-pencil-alt'></i> edit</button>
                                                  <button type="button" class="btn btn-xs btn-danger rounded-0 delete" id="destroy{{$item->id}}" data-url="{{route('engineer.email.destroy',$item->id)}}" data-id="{{$item->id}}"><i class='fas fa-times'></i> delete</button>
                                                </td>
                                              </tr>
                                          @endforeach
                                        </table>
                                        <button type="button" class="btn btn-primary btn-xs rounded-0" id="btnCreateEmail" data-url="{{route('engineer.email.create',$data->id)}}"><i class='fas fa-mail-bulk'></i> New email</button>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label for="inputSkills" class="col-sm-2 col-form-label">Dicipline</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-sm rounded-0" >
                                      </div>
                                    </div> 
                                    <div class="form-group row">
                                      <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                                      <div class="col-sm-10">
                                        <textarea class="text-area" id="inputExperience" ></textarea>
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

@section('script')
    <script>
      
ClassicEditor
.create( document.querySelector( '#inputExperience' ) )
.catch( error => {
    console.error( error );
} );

    </script>
@endsection