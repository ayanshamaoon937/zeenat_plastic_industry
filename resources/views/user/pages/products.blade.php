@extends('user.layouts.master')
@section('pageTitle','Products')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5 mt-4">
            <h1 class="display-2 text-white mb-3 animated slideInDown">Services</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{route('/')}}">Home</a></li>
                    <li class="breadcrumb-item" aria-current="page">Products</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Service Start -->
    @include('user.layouts.services')
    <!-- Service End -->


    <!--product section start-->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-6 mb-3">Explore Our Plastic Solutions</h1>
                <p class="mb-5">"Embark on a visual journey through the excellence of our plastic manufacturing. Committed to precision and unwavering quality, our gallery showcases the diverse range of high-quality plastic solutions we offer."</p>
            </div>
            <div class="grid--content ">
                <div class="column--wrapper">
                    @foreach($products as $product)
                        <a class="post--item" href="{{asset($product->image_path )}}" data-fancybox="group" data-caption="{{$product->description}}">
                            <img src="{{asset($product->image_path )}}" alt="Random Image">
                        </a>
                    @endforeach

                </div>
            </div>
        </div>

    </div>

    <!--product section End -->

    <!-- Testimonial Start -->
    @include('user.layouts.testimonial')
    <!-- Testimonial End -->

    <script>
        $('[data-fancybox]').fancybox({
            // Options will go here
            buttons : [
                'close'
            ],
            wheel : false,
            transitionEffect: "slide",
            // thumbs          : false,
            // hash            : false,
            loop            : true,
            // keyboard        : true,
            toolbar         : false,
            // animationEffect : false,
            // arrows          : true,
            clickContent    : false
        });
    </script>

@endsection
