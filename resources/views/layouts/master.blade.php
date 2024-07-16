<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title', 'Sách Mới')</title>
    <!-- Favicon icon -->
    <link rel="icon" href="{{asset('/')}}assets/img/logo.png" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('/')}}assets/css/all.min.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('/')}}assets/css/bootstrap.min.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="{{asset('/')}}assets/css/style.css">

    <script type="text/javascript" src="{{asset('/')}}assets/js/jquery-3.6.0.min.js"></script>
</head>
<body>
<!-- NAVBAR -->
    @include('layouts.includes.navbar')
<!-- NAVBAR END -->
<!-- HEADER -->
<section class="header py-2 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="headings">
                    <h3><a href="{{route('trang-chu-sach')}}" class="text-secondary">Sách <b class="text-danger">Mới</b></a></h3>
                </div>
            </div>
            <div class="col-md-4">
                <form action="{{route('tatCaSach')}}">
                    <div class="input-group custom-input-group m-1">
                        <input type="text" name="term" value="{{request('term')}}" class="form-control custom-input" placeholder="Tìm sách..">
                        <div class="input-group-append">
                            <button class="btn btn-custom" type="submit">Tìm kiếm</button>
                        </div>
                    </div>
                </form>
            </div>
            @if(Auth::check() == true && Auth::user()->role->name == "Admin")
            @else
            <div class="col-md-4">
                <div class="shopping-cart text-right">
                    <a href="{{route('gioHang')}}"><i class="fas fa-shopping-cart fa-2x m-1"></i>
                        @if(Cart::content()->count())
                            <span class="count-cart">{{Cart::content()->count()}}</span>
                        @endif
                    </a>
                </div>
            </div>
            @endif
        </div>
    </div>
</section>

<!-- HEADER END -->

@yield('scripts')
@yield('content')

<footer class="py-3 text-center border-top bg-light">
    <div class="container">
        <div class="go-to-top mb-2">
            <a href="#nav-top" class="text-muted" title="Go to top"><i class="fas fa-angle-double-up"></i></a>
        </div>
        <div class="footer-text">
            Copyright &copy; Quốc Khang - Mai Liên - <span id="year"></span>
        </div>
    </div>
</footer>



<!-- jQuery -->
<script type="text/javascript" src="{{asset('/')}}assets/js/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{asset('/')}}assets/js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{asset('/')}}assets/js/bootstrap.min.js"></script>
<!-- Your custom scripts (optional) -->
<script type="text/javascript" src="{{asset('/')}}assets/js/script.js"></script>



</body>
</html>
