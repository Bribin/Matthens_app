
@extends('layouts.app')

@section('content')
<!-- Hero Start -->
<div class="breadcrumbs" >
    <div class="container">
        <div class="breadcrumb-share clearfix d-none d-sm-block">

            <div class="float-start">
                <nav aria-label="breadcrumb" class="d-inline-block">
                    <ul class="breadcrumb ">
                        <li class="breadcrumb-item"><a href="_index.html">Home</a></li>
                        <li class="breadcrumb-item active " aria-current="page">About Matthens </li>

                    </ul>
                </nav>
            </div>

        </div>
    </div>
</div>
<section class="border-bottom" >
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-6 mt-4 pt-2">
                <div class="section-title ">
                    <h2 class="heading">Connect with us</h2>
                    <p class="text-muted">Kickstart a design-centric career by mastering the extensive UI/UX concepts.</p>


                </div>
            </div><!--end col-->
            <div class="col-lg-5 col-md-6 mt-4 pt-2">
                <img src="assets/images/hero_contact.png" class="rounded img-fluid mx-auto d-block" alt="">
            </div><!--end col-->
        </div>

    </div> <!--end container-->
</section><!--end section-->

<!-- Hero Start -->
<section class="pb-5"  >

    <div class="container">
        <div class="row align-items-center aos-init aos-animate" data-aos="fade-up">

            <div class="col-lg-6  col-md-7 ">
                <div class="title-heading mt-5 pt-4">
                    <h1 class="heading">Let's talk about your portfolio</h1>
                    <p class="text-dark">Start working with <span class="text-primary fw-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>

                    <div class="d-flex contact-detail align-items-center mt-3">
                        <div class="icon">
                            <i data-feather="mail" class="fea icon-m-md text-dark me-3"></i>
                        </div>
                        <div class="flex-1 content">
                            <h5 class="title fw-bold mb-0">Email</h5>
                            <a href="mailto:contact@example.com" class="text-primary">mail@matthens.com</a>
                        </div>
                    </div>

                    <div class="d-flex contact-detail align-items-center mt-3">
                        <div class="icon">
                            <i data-feather="phone" class="fea icon-m-md text-dark me-3"></i>
                        </div>
                        <div class="flex-1 content">
                            <h5 class="title fw-bold mb-0">Phone</h5>
                            <a href="tel:+152534-468-854" class="text-primary">+91 9656958686</a>
                        </div>
                    </div>

                    <div class="d-flex contact-detail align-items-center mt-3">
                        <div class="icon">
                            <i data-feather="map-pin" class="fea icon-m-md text-dark me-3"></i>
                        </div>
                        <div class="flex-1 content">
                            <h5 class="title fw-bold mb-0">Location</h5>
                            <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15716.573402014874!2d76.34923752735799!3d10.00501563556269!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b080d0f37d098f1%3A0x9b2690ae442cc2d2!2sMatthens%20UI%2FUX%20Studio!5e0!3m2!1sen!2sin!4v1618809694453!5m2!1sen!2sin" data-type="iframe" class="video-play-icon text-primary lightbox">View on Google map</a>
                        </div>
                    </div>
                    <ul class="list-unstyled social-icon mb-0 mt-4">
                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="github" class="fea icon-sm fea-social"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="youtube" class="fea icon-sm fea-social"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="gitlab" class="fea icon-sm fea-social"></i></a></li>
                    </ul><!--end icon-->
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- Hero End -->


@endsection
