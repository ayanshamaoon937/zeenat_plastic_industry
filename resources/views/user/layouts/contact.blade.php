<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="display-6 mb-3">Have Any Query? Feel Free To Contact Us</h1>
            <p class="mb-5">"Questions or concerns? We're here for you. Don't hesitate to reach out. Contact us for any inquiries or assistance. Your satisfaction is our priority, and we're ready to help!"</p>
        </div>
        <div class="row contact-info position-relative g-0 mb-5">
            <div class="col-lg-6">
                <a href="tel:{{$settings->phone_number}}" class="d-flex justify-content-lg-center bg-primary p-4">
                    <div class="icon-box-light flex-shrink-0">
                        <i class="bi bi-phone text-dark"></i>
                    </div>
                    <div class="ms-3">
                        <h5 class="text-white">Call Us</h5>
                        <h2 class="text-white mb-0">{{$settings->phone_number}}</h2>
                    </div>
                </a>
            </div>
            <div class="col-lg-6">
                <a href="mailto:{{$settings->email}}" class="d-flex justify-content-lg-center bg-primary p-4">
                    <div class="icon-box-light flex-shrink-0">
                        <i class="bi bi-envelope text-dark"></i>
                    </div>
                    <div class="ms-3">
                        <h5 class="text-white">Mail Us</h5>
                        <h2 class="text-white mb-0">{{$settings->email}}</h2>
                    </div>
                </a>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <form action="{{route('contact_submit')}}" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" required name="name" id="name" placeholder="Your Name">
                                <label for="name">Your Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" required name="email" id="email" placeholder="Your Email">
                                <label for="email">Your Email</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" required name="subject" id="subject" placeholder="Subject">
                                <label for="subject">Subject</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a message here" required name="message" id="message" style="height: 200px"></textarea>
                                <label for="message">Message</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary py-3 px-5" type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <iframe class="w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13511.64073986678!2d74.1524099!3d32.1527223!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391f2b006ee76b63%3A0x53e175efada2d2!2sZeenat%20plastic%20industry!5e0!3m2!1sen!2s!4v1708151476019!5m2!1sen!2s"
                        frameborder="0" style="min-height: 300px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>

            </div>
        </div>
    </div>
</div>
