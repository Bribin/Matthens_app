
@extends('layouts.app')

@section('content')
    <!-- Hero Start -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h2 >Learn-by-doing with a live micro class</h4>
                            <p class="para-desc mx-auto mb-0">Our certified online UX/UI bootcamps are designed to help you learn-by-doing with a micro class around the world.</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
    </section><!--end section-->
    <!-- Hero End -->

    <!-- Job List Start -->
    <section class="section">


        <div class="container mt-5 mt-sm-0">
            <div class="row">


                <div class="col-lg-8 col-md-6 col-12">
                    <div class="row align-items-center">
                        <div class="col-lg-9 col-md-8">
                            <div class="section-title">
                                <span class="text-muted me-3">Showing 1 - 15 out of 452</span>
                            </div>
                        </div><!--end col-->

                        <div class="col-lg-3 col-md-4 mt-4 mt-sm-0 pt-2 pt-sm-0">
                            <div class="form custom-form">
                                <select class="form-select form-control" aria-label="Default select example" id="Sortbylist-job">
                                    <option selected>All Jobs</option>
                                    <option>Full Time</option>
                                    <option>Part Time</option>
                                    <option>Remote</option>
                                    <option>Work From Home</option>
                                </select>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->

                    <div class="row">
                        @if(count($jobs ) > 0)
                            @foreach($jobs as $job)
                        <div class="col-12 mt-4 pt-2">
                            <div class="job-box job-primary d-md-flex align-items-center border-0 shadow rounded p-4 position-relative">
                                <img src="images/job/Circleci.svg" class="avatar avatar-md-sm" alt="">

                                <div class="ms-md-4 mt-4 mt-sm-0">
                                    <a href="{{ url('/') }}" class="title text-dark h5">{{ $job->title }}</a>

                                    <ul class="list-unstyled mb-0 mt-2">
                                        <li class="d-lg-inline text-muted h6 mb-0 me-lg-2"><i class="uil uil-map-marker icons"></i> <a href="javascript:void(0)" class="text-dark">CircleCI</a>, San Francisco</li>
                                        <li class="d-lg-inline text-muted h6 mb-0 me-lg-2"><i class="uil uil-clock icons"></i> 8hr/ Day</li>
                                        <li class="d-lg-inline text-muted h6 mb-0"><i class="uil uil-bill icons"></i> 30k-35k</li>
                                    </ul>

                                    <div class="mt-2">
                                        <span class="badge bg-soft">Fulltime</span>
                                        <span class="badge bg-soft-warning">Office</span>
                                    </div>
                                </div>

                                <div class="position-absolute top-0 end-0 mt-3 me-3">
                                    <a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft"><i class="uil uil-bookmark align-middle"></i></a>
                                </div>
                            </div>
                        </div><!--end col-->
                            @endforeach
                        @else

                        @endif

                    </div><!--end row-->
                    <div class="row">
                        {{ $jobs->links() }}
                    </div>
                </div><!--end col-->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="img-widget">


                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- Job List End -->




@endsection
