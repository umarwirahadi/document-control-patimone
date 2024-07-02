@extends('layouts.index')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h4 class="m-0 text-dark"> {{ $data->title ?? 'Welcome ' . Auth()->user()->name }}</h4>
                    </div>
                    <div class="col-sm-6">
                        {{-- <div class="float-right">
                      <button type="button" class="btn btn-sm btn-primary rounded-0"><i
                              class="fas fa-plus-circle"></i> Add</button>
                      <button type="button" class="btn btn-sm btn-success rounded-0"><i
                              class="fas fa-history"></i> Refresh</button>

                  </div> --}}

                    </div>
                </div>
            </div>
        </div>
        <div class="content">

            <div class="container-fluid">
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
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">Package assigned</h3>
                                            </div>
                                            <div class="card-body">
                                                <div id="accordion">
                                                    @forelse (Auth::user()->packages as $package)
                                                        <div
                                                            class="card @if ($package->package_name == 'Package 5') card-primary @else card-danger @endif">
                                                            <div class="card-header">
                                                                <h4 class="card-title w-100">
                                                                    <a class="d-block w-100 collapsed"
                                                                        data-toggle="collapse" href="#collapseOne"
                                                                        aria-expanded="false">
                                                                        {{ $package->package_name ?? '' }}
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseOne" class="collapse" data-parent="#accordion"
                                                                style="">
                                                                <div class="card-body">
                                                                    <p>{{ $package->total_days ?? '0' }}</p>
                                                                    <p>{{ $package->description }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        {{-- <div class="card card-danger">
                                                        <div class="card-header">
                                                          <h4 class="card-title w-100">
                                                            <a class="d-block w-100" data-toggle="collapse" href="#collapseTwo">
                                                              Collapsible Group Danger
                                                            </a>
                                                          </h4>
                                                        </div>
                                                        <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                                          <div class="card-body">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                                                            3
                                                            wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                                                            laborum
                                                            eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                                                            nulla
                                                            assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                                            nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                                                            beer
                                                            farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                                                            labore sustainable VHS.
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="card card-success">
                                                        <div class="card-header">
                                                          <h4 class="card-title w-100">
                                                            <a class="d-block w-100 collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false">
                                                              Collapsible Group Success
                                                            </a>
                                                          </h4>
                                                        </div>
                                                        <div id="collapseThree" class="collapse" data-parent="#accordion" style="">
                                                          <div class="card-body">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                                                            3
                                                            wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                                                            laborum
                                                            eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                                                            nulla
                                                            assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                                            nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                                                            beer
                                                            farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                                                            labore sustainable VHS.
                                                          </div>
                                                        </div>
                                                      </div> --}}
                                                    @empty
                                                        <span>No Package assigned, please contact admin..!</span>
                                                    @endforelse
                                                </div>
                                            </div>
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
