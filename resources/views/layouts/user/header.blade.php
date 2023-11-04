<!-- BEGIN: Header-->
<nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-light navbar-border">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mobile-menu d-md-none mr-auto">
                    <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#">
                        <i class="feather icon-menu font-large-1"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="navbar-brand" href="{{ route ('admin.dashboard') }}">
                        <img class="brand-logo img-fluid" alt="stack admin logo" width="32px"
                        src="{{$small_logo ? asset ('public/storage/'. $small_logo) :  asset ('public/frontend/images/logosmall.png') }}">
                        <h2 class="brand-text">{{substr($company_name, 0, 12) ?? 'Translations' }}</h2>
                    </a>
                </li>
                <li class="nav-item d-md-none">
                    <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile">
                        <i class="fa fa-ellipsis-v"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item d-none d-md-block">
                        <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="feather icon-menu"></i></a>
                    </li>
                </ul>
                <ul class="nav navbar-nav float-right">
                    {{-- <li class="dropdown dropdown-language nav-item">
                        <a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"><i class="flag-icon flag-icon-us"></i>
                            <span class="selected-language"></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                            <a class="dropdown-item" href="#" data-language="en"><i class="flag-icon flag-icon-us"></i> English</a>
                            <a class="dropdown-item" href="#" data-language="fr"><i class="flag-icon flag-icon-fr"></i> French</a>
                            <a class="dropdown-item" href="#" data-language="pt"><i class="flag-icon flag-icon-pt"></i> Portuguese</a>
                            <a class="dropdown-item" href="#" data-language="de"><i class="flag-icon flag-icon-de"></i> German</a>
                        </div>
                    </li> --}}
                    <li class="dropdown dropdown-notification nav-item">
                        <a class="nav-link nav-link-label" href="#" data-toggle="dropdown">
                            <i class="ficon feather icon-bell"></i>
                            <span class="badge badge-pill badge-danger badge-up">5</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <li class="dropdown-menu-header">
                                <h6 class="dropdown-header m-0"><span class="grey darken-2">Notifications</span>
                                    <span class="notification-tag badge badge-danger float-right m-0">5 New</span>
                                </h6>
                            </li>
                            <li class="scrollable-container media-list">
                                <a href="javascript:void(0)">
                                    <div class="media">
                                        <div class="media-left align-self-center"><i
                                                class="feather icon-plus-square icon-bg-circle bg-cyan"></i></div>
                                        <div class="media-body">
                                            <h6 class="media-heading">You have new order!</h6>
                                            <p class="notification-text font-small-3 text-muted">Lorem ipsum dolor sit
                                                amet, consectetuer elit.</p><small>
                                                <time class="media-meta text-muted"
                                                    datetime="2015-06-11T18:29:20+08:00">30 minutes ago</time></small>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0)">
                                    <div class="media">
                                        <div class="media-left align-self-center"><i
                                                class="feather icon-download-cloud icon-bg-circle bg-red bg-darken-1"></i>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading red darken-1">99% Server load</h6>
                                            <p class="notification-text font-small-3 text-muted">Aliquam tincidunt
                                                mauris eu risus.</p><small>
                                                <time class="media-meta text-muted"
                                                    datetime="2015-06-11T18:29:20+08:00">Five hour ago</time></small>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0)">
                                    <div class="media">
                                        <div class="media-left align-self-center"><i
                                                class="feather icon-alert-triangle icon-bg-circle bg-yellow bg-darken-3"></i>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading yellow darken-3">Warning notifixation</h6>
                                            <p class="notification-text font-small-3 text-muted">Vestibulum auctor
                                                dapibus neque.</p><small>
                                                <time class="media-meta text-muted"
                                                    datetime="2015-06-11T18:29:20+08:00">Today</time></small>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0)">
                                    <div class="media">
                                        <div class="media-left align-self-center"><i
                                                class="feather icon-check-circle icon-bg-circle bg-cyan"></i></div>
                                        <div class="media-body">
                                            <h6 class="media-heading">Complete the task</h6><small>
                                                <time class="media-meta text-muted"
                                                    datetime="2015-06-11T18:29:20+08:00">Last week</time></small>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0)">
                                    <div class="media">
                                        <div class="media-left align-self-center"><i
                                                class="feather icon-file icon-bg-circle bg-teal"></i></div>
                                        <div class="media-body">
                                            <h6 class="media-heading">Generate monthly report</h6><small>
                                                <time class="media-meta text-muted"
                                                    datetime="2015-06-11T18:29:20+08:00">Last month</time></small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-menu-footer">
                                <a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all notifications</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <div class="avatar avatar-online">
                                <img src="{{ auth('user')->user()->image
                                ? asset('public/storage/' . auth('user')->user()->image)
                                : asset('public/backend/app-assets/images/portrait/small/avatar-s-1.png') }}"
                                    alt="avatar"><i></i>
                            </div>
                            <span class="user-name">{{ auth('user')->user()->fname ?? '' }}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item"
                                href="{{ route('user.profile') }}">
                                <i class="feather icon-user"></i> {{ __('Edit Profile') }}
                            </a>
                            <a class="dropdown-item" href="{{ route('user.password.update') }}"><i
                                    class="feather icon-lock"></i> {{ __('Change Password') }}</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('user.logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="feather icon-log-out"></i>
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('user.logout') }}" method="POST"
                                class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- END: Header-->
