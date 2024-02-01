<?php
use Illuminate\Support\Str;
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{$settings->site_name}}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
{{--    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('admin/assets/favicon/apple-touch-icon.png')}}">--}}
{{--    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('admin/assets/favicon/favicon-32x32.png')}}">--}}
{{--    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('admin/assets/favicon/favicon-16x16.png')}}">--}}
{{--    <link rel="manifest" href="{{asset('admin/assets/favicon/site.webmanifest')}}">--}}
{{--    <link rel="mask-icon" href="{{asset('admin/assets/favicon/safari-pinned-tab.svg')}}" color="#5bbad5">--}}
{{--    <meta name="msapplication-TileColor" content="#da532c">--}}
{{--    <meta name="theme-color" content="#ffffff">--}}
    @if($settings->logo !="")

        <link rel="icon" type="image/png" sizes="16x16" href="{{asset($settings->logo)}}">
      
    @else
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('admin/assets/img/logo.png')}}">
    @endif
    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('admin/assets/css/jquery.fancybox.min.css')}}">
    <link href="{{asset('admin/assets/vendor/bootstrap/css/bootstrap-select.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Template Main CSS File -->
    <link href="{{asset('admin/assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/css/custom-styles.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('admin/assets/css/sweetAlert2.css')}}">

</head>
<body>

<main>

    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                    <div class="d-flex justify-content-center py-4">
                        <a href="{{route('/')}}" class="logo d-flex align-items-center justify-content-center">
                            @if($settings->logo !="")
                              
                                <img src="{{asset($settings->logo)}}" alt="Logo">
                               

                            @else
                                <img src="{{asset('admin/assets/img/logo.png')}}" alt="Logo">
                            @endif
                            <span class="d-none d-lg-block text-dark">{{$settings->site_name}}</span>
                        </a>
                    </div><!-- End Logo -->
                    <div class="container">
                        @yield('content')
                    </div>

                </div>
            </div>
        </div>
    </section>
</main><!-- End #main -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('admin/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{asset('admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('admin/assets/vendor/chart.js/chart.umd.js')}}"></script>
<script src="{{asset('admin/assets/vendor/echarts/echarts.min.js')}}"></script>
<script src="{{asset('admin/assets/vendor/quill/quill.min.js')}}"></script>
<script src="{{asset('admin/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
<script src="{{asset('admin/assets/vendor/tinymce/tinymce.min.js')}}"></script>
<script src="{{asset('admin/assets/vendor/php-email-form/validate.js')}}"></script>
<script src="{{asset('admin/assets/vendor/bootstrap/js/jquery-3.7.0.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('admin/assets/js/main.js')}}"></script>


</body>

</html>

