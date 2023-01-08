
@extends('layouts.app')




@section('content')
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
                        <h4 class="heading">Schedules for {{ $course->title }}</h4 class="heading">
                    </div>
                </div><!--end col-->

            </div>

        </div> <!--end container-->
    </section><!--end section-->
    <!-- Hero Start -->
    <section class="section" style="background: #ffffff">
        <div class="container">

            <div class="row">

                <div class="col-lg-9 col-md-6 col-12">
                    <h4> Upcoming Batches</h4>


                    @if(count($course->batches ) > 0)
                        @foreach($course->batches as $batch)
                            <div class="batch-summary">
                                <div class="batch-info">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-4">
                                            <h3>{{ $batch->title }} </h3>
                                            <p class="date-info"> {{ $batch->start_date  }} - {{ $batch->end_date}} , <label class="batch-type"> {{ $batch->getType() }}</label>  </p>
                                            <p>{{ $batch->description }} </p>
                                            <p>{{ $batch->getMode() }}</p>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-4">
                                            <p> </p>
                                            <p class="actual-price ">{{ $batch->discount_price }} </p>
                                            <p class="early-bird-price"> INR {{ $batch->price }}</p>
                                            <p class="validity-date"> Valid till 24 Apr</p>
                                            <p class="validity-date"> Valid till 24 Apr</p>
                                            <p class="affirm-msg">As low as ₹3300 /month</p>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-4">
                                                <a class="btn btn-dark" href="{{ url('/cart') }}">Enroll Course</a>
                                        </div>
                                    </div>
                                </div>
                                @foreach ($batch->batchTimings as $batchTiming)

                                   <p> {{ $batchTiming->mode }}</p>
                                   <p> {{ $batchTiming->title }}</p>

                                    <ul class="schedule-text-1 clearfix">
                                        <li>
                                            <span class="day-text-1">Mon </span><span class="date-text-1">&nbsp;-  {{ $batchTiming->date }}</span>
                                        </li>


                                    </ul>


                                @endforeach

                            </div>
                        @endforeach
                    @else

                    @endif
                </div><!--end col-->
                <div class="col-lg-4 col-md-6 col-12">s</div><!--end col-->
            </div><!--end row-->
        </div>
    </section><!--end section-->
    <!-- Hero End -->






@endsection
