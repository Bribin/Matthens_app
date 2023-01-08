
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
                    <h2 class="heading">Together, we can challenge what’s possible.</h2>
                    <p class="text-muted">Kickstart a design-centric career by mastering the extensive UI/UX concepts.</p>


                </div>
            </div><!--end col-->
            <div class="col-lg-5 col-md-6 mt-4 pt-2">
                <img src="{{ asset('assets/images/hero_about.png') }}" class="rounded img-fluid mx-auto d-block" alt="">
            </div><!--end col-->
        </div>

    </div> <!--end container-->
</section><!--end section-->

<!-- About Start -->
<section class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 col-md-12 mt-4 pt-2 mt-sm-0 pt-sm-0">
                <div class="section-title ms-lg-4 text-center"">
                <h4 class="title mb-4 ">Our Story</h4>
                <p >Matthens started to bridge the gap we experienced between Academia and Industry… or even Life.</p>

                <p>Why we do that? Because we believe for the culture to grow we need to build the like mind. We need to care for your career. Hence, combining all the instructors with high-level industry experience and people who proved a track record of excellent design knowledge has shown their passion to teach.</p>



                <p > At Matthens, we contribute, we learn, and we grow. Hop on board. You’ll love it here..</p>

            </div>
        </div><!--end col-->
    </div><!--end row-->
    </div><!--end container-->


</section><!--end section-->
<!-- About End -->

<!-- Team Start -->
<section class="section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h4 class="title mb-4">Our Greatest Minds</h4>
                    <p>Fearlessly blazing the Degreed trail.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row">
            <div class="col-lg-3 col-md-6 mt-4 pt-2">
                <div class="card team text-center bg-transparent border-0">
                    <div class="card-body p-0">
                        <div class="position-relative">
                            <img src="{{ asset('assets/images/bribin_matthens.png') }}" class="img-fluid" alt="">
                            <ul class="list-unstyled social-icon team-icon mb-0 mt-4">
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                            </ul><!--end icon-->
                        </div>
                        <div class="content pt-3 pb-3">
                            <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Bribin Matthens</a></h5>
                            <small class="designation text-muted">Founder & Mentor</small>
                        </div>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-3 col-md-6 mt-4 pt-2">
                <div class="card team text-center bg-transparent border-0">
                    <div class="card-body p-0">
                        <div class="position-relative">
                            <img src="{{ asset('assets/images/brigin_matthens.png') }}" class="img-fluid " alt="">
                            <ul class="list-unstyled social-icon team-icon mb-0 mt-4">
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                            </ul><!--end icon-->
                        </div>
                        <div class="content pt-3 pb-3">
                            <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Brigin Matthens</a></h5>
                            <small class="designation text-muted">Co-Founder & LifeSkills Coach</small>
                        </div>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-3 col-md-6 mt-4 pt-2">
                <div class="card team text-center bg-transparent border-0">
                    <div class="card-body p-0">
                        <div class="position-relative">
                            <img src="{{ asset('assets/images/ginu_thomas.png') }}" class="img-fluid " alt="">
                            <ul class="list-unstyled social-icon team-icon mb-0 mt-4">
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                            </ul><!--end icon-->
                        </div>
                        <div class="content pt-3 pb-3">
                            <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Ginu Thomas</a></h5>
                            <small class="designation text-muted">Business Head</small>
                        </div>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-3 col-md-6 mt-4 pt-2">
                <div class="card team text-center bg-transparent border-0">
                    <div class="card-body p-0">
                        <div class="position-relative">
                            <img src="{{ asset('assets/images/james_stantly.png') }}" class="img-fluid " alt="">

                        </div>
                        <div class="content pt-3 pb-3">
                            <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">James Stanley</a></h5>
                            <small class="designation text-muted">Production Head</small>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <div class="container mt-100 mt-60">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title">
                    <h4 class="title mb-4">Experience the new way of learning</h4>
                    <p class="text-muted  mx-auto">Join  Matthens  and build the skills need to take on a changing world.

                    </p>

                    <div class="mt-4">
                        <a href="https://wa.me/9656958686/?text=Hi, I am confused about Matthens Courses." target="_blank" rel="noopener noreferrer"><img class="whatsapp" src="{{ asset('assets/images/Button_Whatsapp.svg') }}" alt=""></a>

                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->


@endsection
