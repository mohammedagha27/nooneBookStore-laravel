<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title> @yield('title', env('APP_NAME'))</title>
    {{-- <title>{{ }}</title> --}}
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"
        rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('libraryasset/css/styles.css') }}" rel="stylesheet" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@500&display=swap');

    </style>
    @yield('stayls')
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="{{ route('index') }}"><img width="45px"
                    src="{{ asset('libraryasset/assets/logo.png') }}"> مكتبة نون </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menup
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4"
                            href="{{ route('index') }}">الرئيسية</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4"
                            href="{{ route('about') }}">أقسام الكتب</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4"
                            href="{{ route('contact') }}">تواصل معنا</a></li>
                    @guest
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4"
                                href="{{ route('login') }}">Login</a></li>
                    @endguest
                    @auth
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4"
                                href="{{ route('admin.index') }}">Admin</a></li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
    <!-- Footer-->
    <footer class="border-top">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <ul class="list-inline text-center social-links">
                        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href=""><i class="fab fa-instagram"></i></a></li>
                        <li><a href=""><i class="fab fa-twitter"></i></a></li>
                        <li><a href=""><i class="fab fa-github"></i></a></li>
                        <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>

                    </ul>
                    <div class="small text-center text-muted fst-italic mt-5">شكرا لزيارتكم</div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('libraryasset/js/scripts.js') }}"></script>
</body>

</html>
