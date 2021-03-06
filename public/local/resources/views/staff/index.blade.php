<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" name="viewport">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<title>@lang('admin.userTitle')</title>
<link rel="icon" type="image/x-icon" href="{{ Asset('assets/img/icon1.png') }}"/>
<link rel="icon" href="{{ Asset('assets/img/icon1.png') }}" type="image/png" sizes="16x16">
<link rel="stylesheet" href="{{ Asset('assets/vendor/pace/pace.css') }}">
<script src="{{ Asset('assets/vendor/pace/pace.min.js') }}"></script>


<link rel="stylesheet" type="text/css" href="{{ Asset('assets/fonts/materialdesignicons/materialdesignicons.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ Asset('assets/css/atmos.min.css') }}">

</head>
<body class="jumbo-page">

<main class="admin-main  ">
    <div class="container-fluid">
        <div class="row ">
            <div class="col-lg-5  bg-white">
                <div class="row align-items-center m-h-100">
                    <div class="mx-auto col-md-8">
                        <div class="p-b-20 text-center">
                            {{-- <p>
                                <img src="{{ Asset('assets/img/login.png') }}" width="50%" alt="">

                            </p> --}}
                            
                        </div>
                        <h3 class="text-center p-b-20 fw-400">@lang('admin.userTitle')</h3>

                        @if(Session::has('error'))

                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ Session::get('error') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        </div>

                        @endif

                        @if(Session::has('message'))

                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ Session::get('message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        </div>

                        @endif

                        <form class="needs-validation" action="{{ $form_url }}" method="post">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-row">
                                <div class="form-group floating-label col-md-12">
                                    <label>Tên đăng nhập</label>
                                    <input type="text" required class="form-control" placeholder="Tên đăng nhập" name="username">
                                </div>
                                <div class="form-group floating-label col-md-12">
                                    <label>Mật khẩu</label>
                                    <input type="password" required class="form-control "  placeholder="Mật khẩu" name="password">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary btn-block btn-lg">Đăng nhập</button>

                        </form>
                       
                    </div>

                </div>
            </div>
            {{-- <div class="col-lg-7 d-none d-md-block bg-cover" style="background-image: url('{{Asset('assets/img/login.svg') }}');">

            </div> --}}
        </div>
    </div>
</main>

    <script src="{{Asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{Asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{Asset('assets/vendor/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
</body>
</html>