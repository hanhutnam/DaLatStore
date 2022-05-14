<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - Đà Lạt Store</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    @yield('js')

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mycss.css') }}" rel="stylesheet">
    @yield('css')
</head>
<body style="background-color:#F0FFF0;">
    <div id="app">
        <!-- main nagative -->
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Đà Lạt Store
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Đăng Nhập') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Đăng ký') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->username }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <div>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Đăng xuất') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>                         
                                    </div>
                                    <div>
                                        <a class="dropdown-item" href="{{ route('user.index') }}">
                                            {{ __('Thông tin cá nhân') }}
                                        </a>
                                    </div>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <!-- detail nagative -->
        <nav class="navbar navbar-expand-md navbar-light shadow-sm menu">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="m-3"><a href="#">Trang chủ</a></li>
                        <li class="m-3"><a href="#">Danh mục</a></li>
                        <li class="m-3"><a href="#">Thông tin liên hệ</a></li>
                        <li class="m-3"><a href="#">Góp ý</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        tìm kiếm chưa làm
                                
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        Giỏ hàng chưa làm
                                
                    </ul>
                </div>
            </div>
        </nav>

        <!-- banner -->
        @yield('banner')

        <!-- main content -->
        <div class="row m-2">
            <div class="col-3">
                <div class="py-2 container ">
                    <div class="card">
                        <div class="card-header">{{ __('Danh mục categories') }}</div>
                        <div class="card-body">
                            {{ __('Chưa có category nào!') }}
                        </div>
                        <div class="card-body">
                            {{ __('Chưa có category nào!') }}
                        </div>
                        <div class="card-body">
                            {{ __('Chưa có category nào!') }}
                        </div>
                        <div class="card-body">
                            {{ __('Chưa có category nào!') }}
                        </div>
                        <div class="card-body">
                            {{ __('Chưa có category nào!') }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-9">
                <main class="py-2 justify-content-center">
                    @yield('content')
                </main>
            </div>
        </div>
        
        <!-- footer -->
        <footer class="text-center myfooter">
            <div>Ho ten sinh vien-ma so sinh vien</div>
            <div>Lop-Khoa Kỹ Thuật Công Nghệ</div>
        </footer>
    </div>


    
</body>
</html>


