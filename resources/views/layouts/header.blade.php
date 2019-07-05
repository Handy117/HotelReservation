<div class="navbar navbar-expand-md navbar-dark">
    <div class="navbar-brand">
        <a href="{{route('home')}}" class="d-inline-block">
            <img src="{{asset('master/global_assets/images/logo_light.png')}}" alt="">
        </a>
    </div>

    <div class="d-md1-none" id="mobile_sidebar_control">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
            <i class="icon-tree5"></i>
        </button>
        <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
            <i class="icon-paragraph-justify3"></i>
        </button>
    </div>

    <div class="collapse navbar-collapse" id="navbar-mobile">
        <ul class="navbar-nav" style="margin-right:-68px;">
            <li class="nav-item">
                <a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
                    <i class="icon-paragraph-justify3"></i>
                </a>
            </li>
        </ul>

        <span class="badge bg-success ml-md-3 mr-md-auto">Online</span>

        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a href="animations_velocity_basic.html#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
                    <i class="icon-bell3"></i>
                    <span class="d-md-none ml-2">Notifications</span>
                    {{-- <span class="badge badge-pill bg-warning-400 ml-auto ml-md-0">2</span> --}}
                </a>
                @php
                    $recent_messages = \App\Models\Notification::orderBy('created_at', 'desc')->limit(5)->get();
                @endphp
                <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
                    <div class="dropdown-content-header">
                        <span class="font-weight-semibold">Notifications</span>
                    </div>

                    <div class="dropdown-content-body dropdown-scrollable">
                        <ul class="media-list">
                            @foreach ($recent_messages as $item)
                                @php
                                    $posted_time = new DateTime($item->created_at);
                                    $now = new DateTime();
                                    $interval = $posted_time->diff($now);
                                    if($interval->d >= 1){
                                        $time = $interval->d. " days";
                                    }else if($interval->h >= 1){
                                        $time = $interval->h. " hours";
                                    }else if($interval->i >= 1){
                                        $time = $interval->i. " mins";
                                    }else{
                                        $time = "Just Now";
                                    }                                    
                                @endphp 
                                <li class="media">
                                    <div class="mr-3 position-relative">
                                        <a href="{{route('reservation.edit', $item->reservation->id)}}" class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon">
                                            @switch($item->type)
                                                @case("new_reservation")
                                                    <i class="icon-git-pull-request"></i>
                                                    @break
                                                @case("om_accept")
                                                    <i class="icon-git-pull-request"></i>
                                                    @break
                                                @case("gm_accept")
                                                    <i class="icon-git-pull-request"></i>
                                                    @break
                                                @default
                                                    <i class="icon-git-pull-request"></i>
                                            @endswitch
                                        </a>
                                    </div>

                                    <div class="media-body">
                                        <div class="media-title">
                                            <a href="{{route('reservation.edit', $item->reservation->id)}}">
                                                <span class="font-weight-semibold">
                                                    @switch($item->type)
                                                        @case("new_reservation")
                                                            New Reservation
                                                            @break
                                                        @case("om_accept")
                                                            Office Manager Accept
                                                            @break
                                                        @case("gm_accept")
                                                            General Manager Accept
                                                            @break
                                                        @default
                                                            New Nofification
                                                    @endswitch 
                                                </span>
                                                <span class="text-muted float-right font-size-sm"> {{$time}} </span>
                                            </a>
                                        </div>
                                        <span class="text-muted">{{$item->content}}</span>
                                    </div>
                                </li>
                            @endforeach

                            <li class="media">
                                <div class="mr-3">
                                    <img src="../../../../global_assets/images/demo/users/face4.jpg" width="36" height="36" class="rounded-circle" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="media-title">
                                        <a href="animations_velocity_basic.html#">
                                            <span class="font-weight-semibold">Beatrix Diaz</span>
                                            <span class="text-muted float-right font-size-sm">Tue</span>
                                        </a>
                                    </div>

                                    <span class="text-muted">What a strenuous career it is that I've chosen...</span>
                                </div>
                            </li>

                        </ul>
                    </div>

                    <div class="dropdown-content-footer justify-content-center p-0">
                        <a href="#" class="bg-light text-grey w-100 py-2" data-popup="tooltip" title="Load more"><i class="icon-menu7 d-block top-0"></i></a>
                    </div>
                </div>
            </li>

            <li class="nav-item dropdown dropdown-user">
                <a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
                    <img src="@if (isset(Auth::user()->picture)){{asset(Auth::user()->picture)}} @else {{asset('images/avatar128.png')}} @endif" class="rounded-circle mr-2" height="34" alt="">
                    <span>{{Auth::user()->name}}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="{{route('profile')}}" class="dropdown-item"><i class="icon-user-plus"></i> My Profile</a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" class="dropdown-item">
                    <i class="icon-switch2"></i> Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </div>
</div>