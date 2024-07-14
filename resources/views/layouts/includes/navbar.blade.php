<nav class="navbar navbar-expand-sm navbar-light custom-bg p-1 border-bottom" id="nav-top">
    <div class="container">
        <a href="{{route('trang-chu-sach')}}" class="logo-img"><img src="{{asset('/')}}assets/img/logo.png" alt=""></a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-collapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="nav-collapse">
            <ul class="navbar-nav">
                <li class="nav-item px-2">
                    <a href="{{route('trang-chu-sach')}}" class="nav-link">Trang chủ</a>
                </li>
                <li class="nav-item px-2">
                    <a href="{{route('tatCaSach')}}" class="nav-link">Tất cả sách</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                @if(Auth::check() == false)
                    <li class="nav-item px-2">
                        <a href="{{url('login')}}" class="nav-link"><i class="fas fa-user-lock"></i> Đăng nhâp</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('register')}}" class="nav-link"><i class="fas fa-user"></i> Đăng ký</a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" data-toggle="dropdown">
                            <span class="image-circle"><img src="{{Auth::user()->image? Auth::user()->image_url:Auth::user()->default_img}}" width="30" alt=""></span>
                            {{Auth::user()->name}}
                        </a>
                        <div class="dropdown-menu">
                            @if(Auth::user()->role->name == "Admin")
                                <a class="dropdown-item" href="{{route('admin.home')}}">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-muted"></i>
                                    Hồ sơ cá nhân
                                </a>
                                <div class="dropdown-divider"></div>
                            @elseif(Auth::user()->role->name == "User")
                                <a class="dropdown-item" href="{{route('user.trang-chu')}}">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-muted"></i>
                                     Hồ sơ cá nhân
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-muted"></i>
                                    Cài đặt tài khoản
                                </a>
                                <div class="dropdown-divider"></div>
                            @else
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-muted"></i>
                                     Hồ sơ cá nhân
                                </a>
                            @endif
                            <a class="dropdown-item" href="{{url('logout')}}">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-muted"></i>
                                Đăng xuất
                            </a>
                        </div>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
