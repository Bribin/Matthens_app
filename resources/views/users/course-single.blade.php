
@extends('layouts.user-dashboard')
@section('content')


<div class="nk-block "  >
    <div class="row ">
        <div class="col-lg-8">
            <h4>Upcoming Batches</h4>

            <div class="nk-tb-list is-separate is-medium mb-3">
                <div class="nk-tb-item nk-tb-head">

                    <div class="nk-tb-col fw-bold"><span>DATE</span></div>
                    <div class="nk-tb-col tb-col-md fw-bold"><span>QTY</span></div>
                    <div class="nk-tb-col fw-bold"><span class="d-none d-mb-block">PRICING</span></div>

                    <div class="nk-tb-col tb-col-sm fw-bold"><span>ENROLL</span></div>

                </div><!-- .nk-tb-item -->
                @foreach( $course->batches as $batch)
                    <div class="nk-tb-item">
                        <div class="nk-tb-col">
                            <span class="tb-lead">
                                <h6 class="text-uppercase"> Aug 15 - Sep 02, {{ $batch->getType() }}</h6>
                                <p class="p-0 m-0">06:00 PM - 08:00 PM ( IST )</p>
                                <p>{{ $batch->getMode() }}</p>
                                <p class="p-0 m-0">{{ $batch->start_time }} </p>
                            </span>
                            <div class="course-details">
                                <h6>MODE OF DELIVERY & TRAINER</h6>
                                <div class="batch-details">

                                </div>
                            </div>
                        </div>
                        <div class="nk-tb-col tb-col-md">
                            <span class="tb-sub">{{ $batch->start_date }} -  {{ $batch->end_date }}</span>
                        </div>
                        <div class="nk-tb-col">
                            <span class="tb-lead">INR  {{ $course->discount_price }}</span>
                        </div>
                        <div class="nk-tb-col nk-tb-col-tools">
                          <a class="btn btn-primary btn-sm" href="#">Enroll Now</a>
                        </div>
                    </div><!-- .nk-tb-item -->

                @endforeach


            </div><!-- .nk-tb-list -->



            <h6>Course Price at  {{ $course->discount_price }} </h6>

            </div>


{{--        {{ $course->batches }}--}}
        <div class="col-lg-4">
            <div class="card card-bordered">
                <div class="card-inner">
                    <img height="300"  src="{{ asset('backend/images/course_cover.svg') }}" >
                    <p class="badge badge-outline-blue text-dark">PRO COURSE </p>
                    <h4>{{ $course->title }}</h4>
                    <p> {!!$course->description  !!}</p>
                </div>


            </div>
        </div>

        <div class="col-lg-12">

        </div>

        <div class="col-lg-12">
            <table>

            </table>
        </div>


    </div>
</div><!-- .nk-block -->



@endsection
