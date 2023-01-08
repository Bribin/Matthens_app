
@extends('layouts.app')

@section('content')

{{--{{ $courses }}--}}
<!-- Courses Start -->

<section class="section" id="courses">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h2 >Learn-by-doing with a live micro class</h4>
                    <p class="para-desc mx-auto mb-0">Our certified online UX/UI bootcamps are designed to help you learn-by-doing with a micro class around the world.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row">

            @if(count($courses ) > 0)
                @foreach($courses as $course)
                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <a href="{{ url('courses/'.$course->slug.'/overview') }}">
                            <div class="card courses-desc overflow-hidden rounded shadow border-0">
                                <div class="position-relative d-block overflow-hidden">
                                    <img src="{{ asset('assets/images/preview.jpg') }}" class="img-fluid rounded-top mx-auto" alt="">
                                    <div class="overlay-work bg-dark"></div>
                                    <a href="javascript:void(0)" class="text-white h6 preview">{{ $course->language }} <i class="uil uil-angle-right-b align-middle"></i></a>
                                </div>
                                <div class="card-body">
                                    <h5>{{ $course->title }}  </h5>

                                    @foreach($course->tags  as $tag)
                                       <span class="alert alert-outline-primary"> {{ $tag->name }}</span>
                                    @endforeach

                                    <div class="fees d-flex justify-content-between">
                                        <ul class="list-unstyled mb-0 numbers">
                                            <li><i class="uil uil-graduation-cap text-muted"></i> 14 days, 21 sessions, 20 hours</li>
                                        </ul>
                                        <h4><span class="h6">₹</span>{{ $course->price }}</h4>
                                        <h4><span class="h6">₹</span>{{ $course->discount_price }}</h4>


                                    </div>

                                    <div class="mt-4">
                                        <a href="{{ url('live-bootcamps/'.$course->id.'/schedule') }}" class="btn btn-dark btn-lg btn-block">View Schedules</a>
                                    </div>

                                </div>
                            </div>
                        </a>
                    </div><!--end col-->
                @endforeach
            @else

            @endif
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- Courses End -->


@endsection
