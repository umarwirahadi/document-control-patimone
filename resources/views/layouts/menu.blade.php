@auth
<nav class="main-header navbar navbar-expand-md navbar-light navbar-white fixed-top">
    <div class="container-fluid">
        <a href="/" class="navbar-brand">
            <img src="{{ asset('img/ptmbn.jpg') }}" alt="Patimone" class="brand-image brand-sm">
        </a>
        <button class="navbar-toggler order-1" type="button" data-toggle="collapse"
            data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/" class="nav-link">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" class="nav-link dropdown-toggle">Correspondence</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                        <li><a href="{{route('letter.index') }}" class="dropdown-item"><span class="fas fa-exchange-alt"></span> incoming </a></li>
                        <li><a href="{{route('transmittal.index')}}" class="dropdown-item"><span class="fas fa-exchange-alt"></span> outgoing</a></li>

                        <li class="dropdown-divider"></li>

                        <li class="dropdown-submenu dropdown-hover w-100">
                            <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"
                                class="dropdown-item dropdown-toggle"><span class="fas fa-long-arrow-alt-right"></span> RFI</a>
                            <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                                <li><a href="{{route('incoming.index')}}" class="dropdown-item">Schadule</a></li>
                                <li><a href="#" class="dropdown-item">Inspector</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" class="nav-link dropdown-toggle">Inspection</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                        <li><a href="{{route('inspector.index')}}" class="dropdown-item"><span class="fas fa-users"></span> Inspectors</a></li>
                        <li><a href="#" class="dropdown-item"><span class="fas fa-balance-scale"></span> RFI</a></li>
                        <li><a href="#" class="dropdown-item"><span class="fas fa-briefcase"></span> Schadule </a></li>
                        <li><a href="#" class="dropdown-item"><span class="fas fa-file-alt"></span> Shop Drawings</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" class="nav-link dropdown-toggle">Documents</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                        <li><a href="#" class="dropdown-item"><span class="fas fa-file-alt"></span> Contract Document </a></li>
                        <li><a href="#" class="dropdown-item"><span class="fas fa-file-alt"></span> Method statement</a></li>
                        <li><a href="#" class="dropdown-item"><span class="fas fa-file-alt"></span> Shop Drawings</a></li>
                        <li><a href="#" class="dropdown-item"><span class="fas fa-file-alt"></span> MoM</a></li>
                        <li><a href="#" class="dropdown-item"><span class="fas fa-file-alt"></span> Code and Standards</a></li>
                        <li><a href="#" class="dropdown-item"><span class="fas fa-file-alt"></span> ITP</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" class="nav-link dropdown-toggle">Equipment</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                        <li class="dropdown-submenu dropdown-hover w-100">
                            <a id="dropdownSubMenu" href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"
                                class="dropdown-item dropdown-toggle"><span class="fa fa-angle-right"></span> Utility EQ</a>
                            <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                                <li><a href="{{ route('eq.product.category.index') }}" class="dropdown-item"> <span class="fas fa-users-cog"></span> EQ Category</a></li>
                                <li class="dropdown-divider"></li>
                            </ul>
                        </li>
                        <li><a href="{{route('eq.product.index')}}" class="dropdown-item"><span class="fas fa-file-alt"></span> EQ Product </a></li>
                        <li><a href="#" class="dropdown-item"><span class="fas fa-file-alt"></span> Distribution</a></li>
                        <li><a href="#" class="dropdown-item"><span class="fas fa-file-alt"></span> Handover</a></li>
                    </ul>
                </li>


                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" class="nav-link dropdown-toggle">Master</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                        <li><a href="{{ route('contact.index') }}" class="dropdown-item"><span class="fa fa-angle-right"></span> Contact </a></li>
                        <li class="dropdown-divider"></li>
                        <li><a href="{{route('engineer.index')}}" class="dropdown-item"> <span class="fa fa-angle-right"></span> Full teams</a></li>
                        @role(['admin','dc'])
                        <li class="dropdown-divider"></li>
                        <li class="dropdown-submenu dropdown-hover w-100">
                            <a id="dropdownSubMenu" href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"
                                class="dropdown-item dropdown-toggle"><span class="fa fa-angle-right"></span> Data</a>
                            <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                                <li><a href="{{ route('engineer.index') }}" class="dropdown-item"> <span class="fas fa-users-cog"></span> engineers</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a href="{{ route('user.index') }}" class="dropdown-item"> <span class="fas fa-users"></span> Credentials</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a href="{{ route('position.index') }}" class="dropdown-item"> <span class="fas fa-user-check"></span> Position</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a href="{{route('work.index')}}" class="dropdown-item"> <span class="fas fa-handshake"></span> Bill Items</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a href="{{route('package.index')}}" class="dropdown-item"><span class="fas fa-box-open"></span> Packages</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a href="#" class="dropdown-item"><span class="fas fa-award"></span> Contractors</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a href="{{route('user.index')}}" class="dropdown-item"><span class="fas fa-award"></span> Users</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a href="{{route('ldap.index')}}" class="dropdown-item"><span class="fas fa-award"></span> LDAP</a></li>
                            </ul>
                        </li>
                        @endrole
                        <li class="dropdown-divider"></li>
                        <li class="dropdown-submenu dropdown-hover w-100">
                            <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"
                                class="dropdown-item dropdown-toggle"><span class="fa fa-angle-right"></span> Utility</a>
                            <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                                <li><a href="{{route('item.index')}}" class="dropdown-item"><span class="fas fa-sitemap"></span> item</a></li>
                                <li><a href="{{route('letter-source.index')}}" class="dropdown-item"> <span class="fab fa-sourcetree"></span> Letter source</a></li>
                                <li><a href="{{route('corres-type.index')}}" class="dropdown-item"> <span class="far fa-file-archive"></span> Correspondence type</a></li>
                                <li><a href="{{route('action-type.index')}}" class="dropdown-item"> <span class="fas fa-archive"></span> Type of action</a></li>
                                <li><a href="{{route('documenttype.index')}}" class="dropdown-item"> <span class="fas fa-archive"></span> Document type</a></li>
                                <li><a href="{{route('log.index')}}" class="dropdown-item"> <span class="fas fa-archive"></span> Log user</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" class="nav-link dropdown-toggle">Report</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                        <li><a href="#" class="dropdown-item"><span class="fas fa-file-medical-alt"></span> Outstanding letters </a></li>
                        <li class="dropdown-divider"></li>
                        <li><a href="{{route('engineer.index')}}" class="dropdown-item"> <span class="fa fa-angle-right"></span> Full teams</a></li>

                        <li class="dropdown-divider"></li>
                        <li class="dropdown-submenu dropdown-hover w-100">
                            <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"
                                class="dropdown-item dropdown-toggle"><span class="fa fa-angle-right"></span> Data</a>
                            <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                                <li><a href="{{ route('engineer.index') }}" class="dropdown-item"> <span class="fas fa-users-cog"></span> Members</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a href="{{ route('user.index') }}" class="dropdown-item"> <span class="fas fa-users"></span> Users</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a href="{{ route('position.index') }}" class="dropdown-item"> <span class="fas fa-user-check"></span> Position</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a href="{{route('work.index')}}" class="dropdown-item"> <span class="fas fa-handshake"></span> Pay items</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a href="{{route('package.index')}}" class="dropdown-item"><span class="fas fa-box-open"></span> Packages</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a href="#" class="dropdown-item"><span class="fas fa-award"></span> Contractors</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li class="dropdown-submenu dropdown-hover w-100">
                            <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"
                                class="dropdown-item dropdown-toggle"><span class="fa fa-angle-right"></span> Utility</a>
                            <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                                <li><a href="{{route('item.index')}}" class="dropdown-item"><span class="fas fa-sitemap"></span> item</a></li>
                                <li><a href="{{route('letter-source.index')}}" class="dropdown-item"> <span class="fab fa-sourcetree"></span> Letter source</a></li>
                                <li><a href="{{route('corres-type.index')}}" class="dropdown-item"> <span class="far fa-file-archive"></span> Correspondence type</a></li>
                                <li><a href="{{route('action-type.index')}}" class="dropdown-item"> <span class="fas fa-archive"></span> Type of action</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
            {{-- <li class="nav-item dropdown">
                <a href="#" class="nav-link">{{Auth::user()->packages->pluck('package_name')->implode(',')}}</a>
            </li> --}}
            {{-- <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="fas fa-comments"></i>
                    <span class="badge badge-danger navbar-badge">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <a href="#" class="dropdown-item">
                        <div class="media">
                            <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar"
                                class="img-size-50 mr-3 img-circle">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Brad Diesel
                                    <span class="float-right text-sm text-danger"><i
                                            class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">Call me whenever you can...</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago
                                </p>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <div class="media">
                            <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar"
                                class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    John Pierce
                                    <span class="float-right text-sm text-muted"><i
                                            class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">I got your message bro</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago
                                </p>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <div class="media">
                            <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar"
                                class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Nora Silvester
                                    <span class="float-right text-sm text-warning"><i
                                            class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">The subject goes here</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago
                                </p>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-warning navbar-badge">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-envelope mr-2"></i> 4 new messages
                        <span class="float-right text-muted text-sm">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-users mr-2"></i> 8 friend requests
                        <span class="float-right text-muted text-sm">12 hours</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-file mr-2"></i> 3 new reports
                        <span class="float-right text-muted text-sm">2 days</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                </div>
            </li> --}}
            <li class="nav-item">
                <div class="dropdown">
                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                      @auth
                          {{Auth::user()->email}}
                      @endauth
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="{{route('profile.me')}}">Profile</a>
                      <a class="dropdown-item-text" href="javascript:void(0)" onclick="event.preventDefault();document.getElementById('fLogout').submit()">Logout</a>
                      <form action="{{ route('logout') }}" class="hidden" id="fLogout" method="POST">
                        @csrf
                    </form>
                    </div>
                  </div>
        </ul>
    </div>
</nav>
@endauth
