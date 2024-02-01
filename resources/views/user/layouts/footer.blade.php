
<!-- Footer Start -->
<div class="container-fluid footer position-relative bg-dark text-white-50 py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5 py-5">
            <div class="col-lg-6 pe-lg-5">
                <a href="{{route('/')}}" class="navbar-brand">
                    <h1 class="h1 text-primary mb-0"><span class="text-white">{{$settings->site_name}}</span></h1>
                </a>
                <p class="fs-5 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue, iaculis id elit eget, ultrices pulvinar tortor.</p>
                <p class="text-white"><i class="fa fa-map-marker-alt me-2"></i>Gujranwala, Pakistan</p>
                <p><i class="fa fa-phone-alt me-2"></i><a class="text-decoration-none text-white" href="tel:00923177197163">0317 - 7197163</a></p>
                <p><i class="fa fa-envelope me-2"></i><a class="text-decoration-none text-white" href="mailto:info@zeenatplasticindustry.com"> <span>info@zeenatplasticindustry.com</span></a></p>

                <div class="d-flex mt-4">
                    <a class="btn btn-lg-square btn-primary me-2" href="{{$settings->facebook_link}}"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg-square btn-primary me-2" href="{{$settings->twitter_link}}"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg-square btn-primary me-2" href="{{$settings->linkedin_link}}"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg-square btn-primary me-2" href="{{$settings->youtube_link}}"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->
<!-- Copyright Start -->
<div class="container-fluid copyright bg-dark text-white-50 py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-md-start">
                <p class="mb-0">&copy; <a href="{{route('/')}}">{{$settings->site_name}}</a>. All Rights Reserved.</p>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                <p class="mb-0">Designed by <a target="_blank" href="https://www.upwork.com/freelancers/~015e8a669296ea69b0">Ayan Shamaoon</a></p>
            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->
<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('user/lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('user/lib/easing/easing.min.js')}}"></script>
<script src="{{ asset('user/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{ asset('user/lib/counterup/counterup.min.js')}}"></script>
<script src="{{ asset('user/lib/owlcarousel/owl.carousel.min.js')}}"></script>

<!-- Template Javascript -->
<script src="{{asset('user/js/main.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<script>
    $('[data-fancybox]').fancybox({
        buttons: [
            'close'
        ],
        wheel: false,
        transitionEffect: "slide",
        // thumbs          : false,
        // hash            : false,
        loop: true,
        // keyboard        : true,
        toolbar: false,
        // animationEffect : false,
        // arrows          : true,
        clickContent: false
    });
</script>
<script type="text/javascript"  src="{{asset('admin/assets/js/sweetAlert2.js')}}"></script>
<script src="{{asset('js/ajaxCall.js')}}"></script>




