<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('pageTitle')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('user/img/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('user/img/favicon/android-chrome-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="150x150" href="{{asset('user/img/favicon/mstile-150x150.png')}}">
    <link rel="icon" type="image/png" href="{{asset('user/img/favicon/favicon.ico')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('user/img/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('user/img/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('user/img/favicon/site.webmanifest')}}">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">


{{--    @if($settings->logo !="")--}}
{{--        <link rel="icon" type="image/png" sizes="16x16" href="{{asset($settings->logo)}}">--}}
{{--    @else--}}
{{--        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('admin/assets/img/logo.png')}}">--}}
{{--    @endif--}}
    <link rel="stylesheet" href="{{asset('admin/assets/css/sweetAlert2.css')}}">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Red+Rose:wght@600;700&display=swap"
          rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('user/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('user/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('user/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('user/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">
    <style>
        .feature{
            background-size: cover !important;
            background: linear-gradient(rgba(3, 27, 78, .3), rgba(3, 27, 78, .3)), url({{asset('user/img/2.jpeg')}}) left center no-repeat;
        }
        .testimonial {
            background: linear-gradient(rgba(3, 27, 78, .3), rgba(3, 27, 78, .3)), url({{asset('user/img/4.jpg')}}) left center no-repeat;
            background-size: cover !important;
        }
        .page-header {
            background: linear-gradient(rgba(3, 27, 78, .3), rgba(3, 27, 78, .3)), url({{asset('user/img/2.jpeg')}}) center center no-repeat;
            background-size: cover;
        }
    </style>

</head>
<body>
<!-- Spinner Start -->
<div id="spinner"
     class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
</div>
<!-- Spinner End -->
<div class="wrapper">
    <!-- End preloader -->
    @include('user.layouts.header')
    <div class="content">
        @yield("content")
    </div>

    @include('user.layouts.footer');
</div>


@yield("script")

@if(session()->has('icon') && session()->has('title') && session()->has('text'))
    <script>
        Swal.fire({
            icon: '{{session('icon')}}',
            title: '{{session('title')}}',
            text: '{{session('text')}}',
        }).then(() => {
            {{--window.location.href='{{session('location')}}';--}}
        });
    </script>
@endif
</body>
</html>
