<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Meetlink | Share link with your participant</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}">
    <!-- Google fonts - Poppins-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,600">
    <!-- Lightbox-->
    <link rel="stylesheet" href="{{ asset('vendor/lightbox2/css/lightbox.css') }}">
    <!-- Custom font icons-->
    <link rel="stylesheet" href="{{ asset('css/fontastic.css') }}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('css/style.red.css') }}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body>
    <!-- navbar-->
    <header class="header">
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container"><a href="{{ route('index') }}" class="navbar-brand"><img src="img/logo.png" alt=""
                        class="img-fluid"></a>
                <a href="#" data-toggle="modal" data-target="#login" class="navbar-toggler navbar-toggler-rightbtn btn-primary navbar-btn ml-0 ml-lg-3">สร้างห้อง</a>
                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                    </ul><a href="#" data-toggle="modal" data-target="#login" class="btn btn-primary navbar-btn ml-0 ml-lg-3">สร้างห้อง</a>
                </div>
            </div>
        </nav>
    </header>
    <!-- Login Modal-->
    <div id="login" tabindex="-1" role="dialog" aria-hidden="true" class="modal fade bd-example-modal-lg">
        <div role="document" class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-bottom-0">
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body p-4 p-lg-4">
                    <form action="{{ route('create_room') }}" class="login-form text-left" method="POST">
                        @csrf
                        <div class="form-group mb-4">
                            <label>ชื่อห้อง :</label>
                            <input type="text" name="create_room_name" placeholder="กรุณาระบุชื่อห้อง" class="form-control {{ $errors->has('add_room-name') ? ' is-invalid' : '' }}"
                                reqired>
                            @if ($errors->has('create_room_name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('create_room_name') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group mb-4">
                            <label>ชื่อผู้ใช้ :</label>
                            <input type="text" name="create_user_name" placeholder="กรุณาระบุชื่อผู้ใช้" class="form-control {{ $errors->has('add_room-name') ? ' is-invalid' : '' }}"
                                reqired>
                            @if ($errors->has('create_user_name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('create_user_name') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="submit" value="สร้างห้อง" class="btn btn-primary btn-block">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Section-->
    <section class="hero">
        <div class="container mb-5">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="hero-heading mb-0">Move work <br> forward</h1>
                    <div class="row">
                        <div class="col-lg-10">
                            <p class="lead text-muted mt-4 mb-4">share link with your participant.</p>
                        </div>
                    </div>
                    <form action="{{ route('enter_room') }}" class="subscription-form" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="room_name" placeholder="Fill room's name" class="form-control {{ $errors->has('add_room-name') ? ' is-invalid' : '' }}">
                            <button type="submit" class="btn btn-primary">เข้าห้อง</button>
                        </div>
                    </form>
                    @if(Session::has('error'))
                    <div class="alert alert-danger">
                        <strong>Error!</strong> {{ Session::get('error') }}.
                    </div>
                    @endif
                </div>
                <div class="col-lg-6"><img src="img/illustration-hero.svg" alt="..." class="hero-image img-fluid d-none d-lg-block"></div>
            </div>
        </div>
    </section>

    <footer class="pt-lg-5">
        <div class="copyrights">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 text-center text-lg-left">
                        <p class="copyrights-text mb-3 mb-lg-0">&copy; All rights reserved. Appton.co. Design by <a
                                href="https://bootstrapious.com/landing-pages" class="external">Bootstrapious </a></p>
                        <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->

                    </div>
                    <div class="col-lg-6 text-center text-lg-right">
                        <p class="copyrights-text float rightmb-3 mb-lg-0">&copy; System by <a href="https://www.facebook.com/IslamlllGeen"
                                class="external">Sadiqeen </a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- JavaScript files-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/popper.js/umd/popper.min.js') }}"> </script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery.cookie/jquery.cookie.js') }}"> </script>
    <script src="{{ asset('vendor/lightbox2/js/lightbox.js') }}"></script>
    <script src="{{ asset('js/front.js') }}"></script>
</body>

</html>
