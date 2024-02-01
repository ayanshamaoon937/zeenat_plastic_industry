@extends('user.layouts.master')
@section('pageTitle','Home')
@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid header-carousel px-0 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{asset('user/img/carousel-1.jpg')}}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7 text-start">
                                    <h1 class="display-1 text-white animated slideInRight mb-3">Innovating Plastics with {{$settings->site_name}}</h1>
                                    <p class="mb-5 animated slideInRight">Experience excellence with our cutting-edge plastic manufacturing processes. We deliver top-quality products tailored to meet your unique requirements.</p>
                                    <a href="{{route('products')}}" class="btn btn-primary py-3 px-5 animated slideInRight">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{asset('user/img/carousel-2.jpg')}}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-lg-7 text-end">
                                    <h1 class="display-1 text-white animated slideInLeft mb-3">Crafting Excellence at {{$settings->site_name}}</h1>
                                    <p class="mb-5 animated slideInLeft">Our skilled team and advanced techniques ensure precision in plastic molding, setting industry standards. Elevate your products with our expertise.</p>
                                    <a href="{{route('products')}}" class="btn btn-primary py-3 px-5 animated slideInLeft">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->
    <!-- About Start -->
    @include('user.layouts.about')
    <!-- About End -->

    <!-- Features Start -->
    <div class="container-fluid feature mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6 pt-lg-5">
                    <div class="bg-white p-5 mt-lg-5">
                        <h1 class="display-6 mb-4 wow fadeIn" data-wow-delay="0.3s">Innovative Plastic Solutions for Every Industry</h1>
                        <p class="mb-4 wow fadeIn" data-wow-delay="0.4s">Experience unparalleled plastic manufacturing excellence. Our commitment to cutting-edge processes ensures precision and delivers top-quality plastic solutions. Elevate your projects with our expertise.</p>
                        <div class="row g-5 pt-2 mb-5">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                <div class="icon-box-primary mb-4">
                                    <i class="bi bi-tools text-dark"></i>
                                </div>
                                <h5 class="mb-3">Advanced Molding Techniques</h5>
                                <span>Crafting precision with state-of-the-art plastic molding for unparalleled quality.</span>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                                <div class="icon-box-primary mb-4">
                                    <i class="bi bi-patch-check text-dark"></i>
                                </div>
                                <h5 class="mb-3">Quality Control Assurance</h5>
                                <span>Ensuring excellence through rigorous quality control measures.</span>
                            </div>
                        </div>
                        <h5 class="mb-3 wow fadeIn" data-wow-delay="0.5s">Food-Grade Materials</h5>
                        <p class="mb-3 wow fadeIn" data-wow-delay="0.6s">We prioritize safety in food-related applications. Our food-grade materials meet industry standards, ensuring the utmost safety for your products in the food and beverage industry.</p>
                        <a class="btn btn-primary py-3 px-5 wow fadeIn" data-wow-delay="0.7s" href="#">Explore More</a>
                    </div>
                </div>
                <!-- The rest of your existing content remains unchanged -->
            </div>
        </div>
    </div>
    <!-- Features End -->

    <!-- Video Modal Start -->
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                                allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->
    <!-- Service Start -->
    @include('user.layouts.services')
    <!-- Service End -->
    <!-- Team Start -->
    @include('user.layouts.team')
    <!-- Team End -->
    <!-- Testimonial Start -->
    @include('user.layouts.testimonial')
    <!-- Testimonial End -->
@endsection
