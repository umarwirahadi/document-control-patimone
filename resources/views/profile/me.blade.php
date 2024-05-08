@extends('layouts.index')
@section('content')
<div class="content-wrapper"> 
  <div class="content">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>My Profile</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">User Profile</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
    
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-3">
    
                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                  <div class="card-body box-profile">
                    <div class="text-center">
                      <img class="profile-user-img img-fluid img-circle"
                           src="../../dist/img/avatar5.png"
                           alt="User profile picture">
                    </div>
    
                    <h3 class="profile-username text-center">{{$activeUser->name ?? '-'}}</h3>
    
                    <p class="text-muted text-center">{{$activeUser->level ?? '-'}}</p>
                    <p class="text-center text-bg-blue">{{$activeUser->email}}</p>
    
                    <ul class="list-group list-group-unbordered mb-3">

                        @foreach ($useraccess as $item)
                        <li class="list-group-item">
                          {{-- <b>{{$item->package->package_name}}</b> --}}
                            {{-- <b>Package</b> <a class="float-right">1,322</a> --}}
                            <b>{{$item->package->package_name}}</b> <a class="float-right">{!!$item->package->status == 1 ? '<i class="text text-primary">Active</i>' : '<i class="text text-danger">Not Active</i>'!!}</a>
                          </li>      
                        @endforeach
                      
                      
                    </ul>
    
                    <a href="#" class="btn btn-primary btn-block"><b>Update</b></a>
                  </div>
                  <!-- /.card-body -->
                </div>               
               
              </div>
              <!-- /.col -->
              <div class="col-md-9">
                <div class="card">
                  <div class="card-header p-2">
                    <ul class="nav nav-pills">
                      <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a></li>
                      <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li>
                      <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Change Password</a></li>
                    </ul>
                  </div><!-- /.card-header -->
                  <div class="card-body">
                    <div class="tab-content">
                      <div class="active tab-pane" id="activity">
                        <!-- Post -->
                        <div class="post">
                          <div class="user-block">
                            <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
                            <span class="username">
                              <a href="#">Jonathan Burke Jr.</a>
                              <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                            </span>
                            <span class="description">Shared publicly - 7:30 PM today</span>
                          </div>
                          <!-- /.user-block -->
                          <p>
                            Lorem ipsum represents a long-held tradition for designers,
                            typographers and the like. Some people hate it and argue for
                            its demise, but others ignore the hate as they create awesome
                            tools to help create filler text for everyone from bacon lovers
                            to Charlie Sheen fans.
                          </p>
    
                          <p>
                            <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                            <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                            <span class="float-right">
                              <a href="#" class="link-black text-sm">
                                <i class="far fa-comments mr-1"></i> Comments (5)
                              </a>
                            </span>
                          </p>
    
                          <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                        </div>
                        <!-- /.post -->
    
                        <!-- Post -->
                        <div class="post clearfix">
                          <div class="user-block">
                            <img class="img-circle img-bordered-sm" src="../../dist/img/user7-128x128.jpg" alt="User Image">
                            <span class="username">
                              <a href="#">Sarah Ross</a>
                              <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                            </span>
                            <span class="description">Sent you a message - 3 days ago</span>
                          </div>
                          <!-- /.user-block -->
                          <p>
                            Lorem ipsum represents a long-held tradition for designers,
                            typographers and the like. Some people hate it and argue for
                            its demise, but others ignore the hate as they create awesome
                            tools to help create filler text for everyone from bacon lovers
                            to Charlie Sheen fans.
                          </p>
    
                          <form class="form-horizontal">
                            <div class="input-group input-group-sm mb-0">
                              <input class="form-control form-control-sm" placeholder="Response">
                              <div class="input-group-append">
                                <button type="submit" class="btn btn-danger">Send</button>
                              </div>
                            </div>
                          </form>
                        </div>
                        <!-- /.post -->
    
                        <!-- Post -->
                        <div class="post">
                          <div class="user-block">
                            <img class="img-circle img-bordered-sm" src="../../dist/img/user6-128x128.jpg" alt="User Image">
                            <span class="username">
                              <a href="#">Adam Jones</a>
                              <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                            </span>
                            <span class="description">Posted 5 photos - 5 days ago</span>
                          </div>
                          <!-- /.user-block -->
                          <div class="row mb-3">
                            <div class="col-sm-6">
                              <img class="img-fluid" src="../../dist/img/photo1.png" alt="Photo">
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-6">
                              <div class="row">
                                <div class="col-sm-6">
                                  <img class="img-fluid mb-3" src="../../dist/img/photo2.png" alt="Photo">
                                  <img class="img-fluid" src="../../dist/img/photo3.jpg" alt="Photo">
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-6">
                                  <img class="img-fluid mb-3" src="../../dist/img/photo4.jpg" alt="Photo">
                                  <img class="img-fluid" src="../../dist/img/photo1.png" alt="Photo">
                                </div>
                                <!-- /.col -->
                              </div>
                              <!-- /.row -->
                            </div>
                            <!-- /.col -->
                          </div>
                          <!-- /.row -->
    
                          <p>
                            <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                            <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                            <span class="float-right">
                              <a href="#" class="link-black text-sm">
                                <i class="far fa-comments mr-1"></i> Comments (5)
                              </a>
                            </span>
                          </p>
    
                          <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                        </div>
                        <!-- /.post -->
                      </div>
                      <!-- /.tab-pane -->
                      <div class="tab-pane" id="timeline">
                        <!-- The timeline -->
                        <div class="timeline timeline-inverse">
                          <!-- timeline time label -->
                          <div class="time-label">
                            <span class="bg-danger">
                              10 Feb. 2014
                            </span>
                          </div>
                          <!-- /.timeline-label -->
                          <!-- timeline item -->
                          <div>
                            <i class="fas fa-envelope bg-primary"></i>
    
                            <div class="timeline-item">
                              <span class="time"><i class="far fa-clock"></i> 12:05</span>
    
                              <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>
    
                              <div class="timeline-body">
                                Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                                weebly ning heekya handango imeem plugg dopplr jibjab, movity
                                jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                                quora plaxo ideeli hulu weebly balihoo...
                              </div>
                              <div class="timeline-footer">
                                <a href="#" class="btn btn-primary btn-sm">Read more</a>
                                <a href="#" class="btn btn-danger btn-sm">Delete</a>
                              </div>
                            </div>
                          </div>
                          <!-- END timeline item -->
                          <!-- timeline item -->
                          <div>
                            <i class="fas fa-user bg-info"></i>
    
                            <div class="timeline-item">
                              <span class="time"><i class="far fa-clock"></i> 5 mins ago</span>
    
                              <h3 class="timeline-header border-0"><a href="#">Sarah Young</a> accepted your friend request
                              </h3>
                            </div>
                          </div>
                          <!-- END timeline item -->
                          <!-- timeline item -->
                          <div>
                            <i class="fas fa-comments bg-warning"></i>
    
                            <div class="timeline-item">
                              <span class="time"><i class="far fa-clock"></i> 27 mins ago</span>
    
                              <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>
    
                              <div class="timeline-body">
                                Take me to your leader!
                                Switzerland is small and neutral!
                                We are more like Germany, ambitious and misunderstood!
                              </div>
                              <div class="timeline-footer">
                                <a href="#" class="btn btn-warning btn-flat btn-sm">View comment</a>
                              </div>
                            </div>
                          </div>
                          <div class="time-label">
                            <span class="bg-success">
                              3 Jan. 2014
                            </span>
                          </div>
                          <div>
                            <i class="fas fa-camera bg-purple"></i>    
                            <div class="timeline-item">
                              <span class="time"><i class="far fa-clock"></i> 2 days ago</span>    
                              <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>    
                              <div class="timeline-body">
                                <img src="https://placehold.it/150x100" alt="...">
                                <img src="https://placehold.it/150x100" alt="...">
                                <img src="https://placehold.it/150x100" alt="...">
                                <img src="https://placehold.it/150x100" alt="...">
                              </div>
                            </div>
                          </div>
                          <!-- END timeline item -->
                          <div>
                            <i class="far fa-clock bg-gray"></i>
                          </div>
                        </div>
                      </div>
                      <!-- /.tab-pane -->
    
                      <div class="tab-pane" id="settings">
                        <form class="form-horizontal" action="{{route('user.change.password')}}" method="POST" id="formChangePassword">
                          @csrf
                          <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">Current Password</label>
                            <div class="col-sm-10">
                              <input type="password" class="form-control" id="current_password" name="current_password" placeholder="Current password" value="">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="password" class="col-sm-2 col-form-label">New Password</label>
                            <div class="col-sm-10">
                              <input type="password" class="form-control" id="password" name="password" placeholder="New password" autocomplete="off">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="password_confirmation" class="col-sm-2 col-form-label">Confrim Password</label>
                            <div class="col-sm-10">
                              <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm password" autocomplete="off">
                            </div>
                          </div>                                                   
                          <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                              <button type="submit" class="btn btn-sm btn-success rounded-0"><i class='fas fa-save'></i> Submit</button>
                              <button type="reset" class="btn btn-sm btn-danger rounded-0"><i class='fas fa-times'></i> Cancel</button>
                            </div>
                          </div>
                        </form>
                      </div>
                      <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                  </div><!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
      </div>
  </div>
</div>
<div class="modal fade" id="datamodal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  
</div>
@endsection