<!-- Topbar Start -->
<div class="container-fluid py-2 d-none d-lg-flex">
    <div class="container">
        <div class="d-flex justify-content-between">
            <div>
                <small class="me-3"><i class="fa fa-map-marker-alt me-2"></i>{{$settings->location}}</small>
                <small class="me-3"><i class="fa fa-clock me-2"></i>{{$settings->timing}}</small>
            </div>
            <nav class="breadcrumb mb-0">
                <a class="breadcrumb-item small text-body" href="#">Career</a>
                <a class="breadcrumb-item small text-body" href="#">Support</a>
                <a class="breadcrumb-item small text-body" href="#">Terms</a>
                <a class="breadcrumb-item small text-body" href="#">FAQs</a>
            </nav>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Brand Start -->
<div class="container-fluid bg-primary text-white pt-4 pb-5 d-none d-lg-flex">
    <div class="container pb-2">
        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex">
                <i class="bi bi-telephone-inbound fs-2"></i>
                <div class="ms-3">
                    <h5 class="text-white mb-0">Call Now</h5>
                    <a class="text-decoration-none text-white" href="tel:{{$settings->phone_number}}"> <span>{{$settings->phone_number}}</span></a>
                </div>
            </div>
            <a href="{{route('/')}}" class="h1 text-white mb-0">Lab<span class="text-dark">sky</span></a>
            <div class="d-flex">
                <i class="bi bi-envelope fs-2"></i>
                <div class="ms-3">
                    <h5 class="text-white mb-0">Mail Now</h5>
                    <a class="text-decoration-none text-white" href="mailto:{{$settings->email}}"> <span>{{$settings->email}}</span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Brand End -->


<!-- Navbar Start -->
<div class="container-fluid sticky-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-lg-0 px-lg-3">
            <a href="{{route('/')}}" class="navbar-brand d-lg-none">
                <h1 class="text-primary m-0">Lab<span class="text-dark">sky</span></h1>
            </a>
            <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="{{route('/')}}" class="nav-item nav-link active">Home</a>
                    <a href="{{route('about')}}" class="nav-item nav-link">About</a>
                    <a href="{{route('products')}}" class="nav-item nav-link">Products</a>
                    <a href="{{route('contact')}}" class="nav-item nav-link">Contact</a>
                </div>
                <div class="ms-auto d-none d-lg-flex">
                    <a class="btn btn-lg-square btn-primary me-2" href="{{$settings->facebook_link}}"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg-square btn-primary me-2" href="{{$settings->twitter_link}}"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg-square btn-primary me-2" href="{{$settings->linkedin_link}}"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg-square btn-primary me-2" href="{{$settings->youtube_link}}"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->
