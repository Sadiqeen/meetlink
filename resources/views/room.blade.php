<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ $room_name }} | Share link with your participant</title>
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
            <div class="container"><a href="{{ route('index') }}" class="navbar-brand"><img src="{{ asset('img/logo.png') }}"
                        alt="" class="img-fluid"></a>
                <a href="#" class="navbar-toggler navbar-toggler-rightbtn btn-primary navbar-btn ml-0 ml-lg-3">{{
                    $room_name }}</a>
                <!-- <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right btn btn-primary navbar-btn ml-0 ml-lg-3">Menu</button> -->
                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                    </ul><a href="#" class="btn btn-primary navbar-btn ml-0 ml-lg-3">{{ $room_name }}</a>
                </div>
            </div>
        </nav>
    </header>
    <!-- FAQ Section-->
    <section>
        <div class="container">
            <div class="row">
                <!-- sidebar-->
                <aside class="sidebar col-lg-4 mt-5 mt-lg-0">
                    <div class="search mb-4">
                        <form action="#" class="search-form">
                            <div class="form-group">
                                <input type="search" name="search" placeholder="ค้นหา" class="form-control">
                                <button type="submit"> <i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <form id="form_message" method="post" action="{{ route('send_message_mobile') }}">
                        @csrf
                    <div class="sidebar-widget mb-4">
                        <h4 class="sidebar-widget-heading">ชื่อห้อง : {{ $room_name }}</h4>
                        <div class="pl-0 mt-4">
                            <div class="form-group">
                                <input type="text" name="user_name" id="user_name" class="form-control" value="{{ $user_name }}"
                                    placeholder="กรุณาระบุชื่อผู้ใช้">
                                <small id="error_user_name" class="text-danger"></small>
                            </div>
                        </div>
                    </div>
                </aside>
                <div class="col-lg-8">
                    <div id="accordion" class="faq accordion accordion-custom pb-5">
                        <!-- input message -->
                            <div class="subscription-form">
                                <div class="form-group">
                                    <input type="text" name="message" id="message" placeholder="กรอกข้อความ" class="form-control"
                                        required>
                                    <input type="text" name="room_name" value="{{ $room_name }}" hidden>
                                    <button type="submit" class="btn btn-primary" id="smbt">ส่งข้อความ</button>
                                </div>
                            </div>
                        </form>

                        <!-- message -->
                        <div id="link_box">
                            @foreach ($links as $link)
                            <div class="card" id="link-message">
                                <div class="card-header"></div>
                                <div class="card-body text-dark">
                                    <h6 class="link-body">{{ $link['link']}}</h6>
                                    <hr><small>{{ $link['name'] }} | create at {{ $link['created_at']}}</small>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <!-- message -->
                        <div class="card">
                            <div class="card-header">
                                <h4 class="mb-0 accordion-heading">
                                    <button class="d-flex align-items-center">
                                        <i class="fa fa-comments-o"></i>
                                        <span>ยินดีต้อนรับเข้าสู่ห้อง <span class="text-primary">{{ $room_name}}</span>
                                            สร้างโดย <span class="text-primary">{{ $who_create_room }}</span>
                                            <hr>
                                            <small>ผู้ดูแลระบบ | ห้องถูกสร้างเมื่อ {{ $time_create_room }}</small>
                                        </span>
                                    </button>
                                </h4>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <footer class="fixed-bottom bg-white">
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
    <script>
        var qt_link = {{ $qt_link }};
        var room_name = '{{ $room_name }}';
        var send_message_link = '{{ route('send_message') }}';
        var count_message = '{{ route('count_message') }}';
        var get_massage = '{{ route('get_massage') }}';
    </script>
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/popper.js/umd/popper.min.js') }}"> </script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery.cookie/jquery.cookie.js') }}"> </script>
    <script src="{{ asset('vendor/lightbox2/js/lightbox.js') }}"></script>
    <script src="{{ asset('js/linkifyjs/linkify.js') }}"></script>
    <script src="{{ asset('js/linkifyjs/linkify-jquery.js') }}"></script>
    <script src="{{ asset('js/front.js') }}"></script>
    <script src="{{ asset('js/meetlink.js')}}"></script>
</body>

</html>
