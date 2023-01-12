
@extends('layouts.user-dashboard')
@section('content')


<div class="nk-block "  >
    <div class="row ">
        <div class="col-lg-8">
            <h4>Exam Paper on </h4>
            <div class="nk-tb-list is-separate is-medium mb-3">
                <div class="nk-tb-item nk-tb-head">

                    <div class="nk-tb-col fw-bold"><span>DATE</span></div>
                    <div class="nk-tb-col tb-col-md fw-bold"><span>QTY</span></div>
                    <div class="nk-tb-col fw-bold"><span class="d-none d-mb-block">PRICING</span></div>

                    <div class="nk-tb-col tb-col-sm fw-bold"><span>ENROLL</span></div>

                </div><!-- .nk-tb-item -->
                    @foreach($exampapers as $exampaper)

                    <div class="nk-tb-item">
                        <div class="nk-tb-col">
                            <span class="tb-lead">
                                <h6 class="text-uppercase"> {{ $exampaper->PaperCode  }} </h6>
                                <p class="p-0 m-0">{{  $exampaper->Name }}</p>
                                 <p class="p-0 m-0">Total Minutes : {{  $exampaper->TotalMinutes }}</p>
                                 <p class="p-0 m-0">No. of Questions : {{  $exampaper->NoofQuestions }}</p>
                                <p></p>

                            </span>

                        </div>
                        <div class="nk-tb-col tb-col-md">
                            <span class="tb-sub"> -  </span>
                        </div>
                        <div class="nk-tb-col">
                            <span class="tb-lead"> </span>
                        </div>
                        <div class="nk-tb-col nk-tb-col-tools">
                          <a class="btn btn-primary btn-sm" href="{{ url('/exams/'.$exampaper->PaperCode.'/start-exam/') }}">Start Test</a>
                        </div>
                    </div><!-- .nk-tb-item -->

                @endforeach


            </div><!-- .nk-tb-list -->

            </div>


{{--        {{ $course->batches }}--}}
        <div class="col-lg-4">
            <div class="card card-bordered">
                <div class="card-inner">
                    <img height="300"  src="{{ asset('backend/images/course_cover.svg') }}" >
                    <p class="badge badge-outline-blue text-dark">PRO COURSE </p>
                    <h4>sdsad</h4>
                    <p> asdsad</p>
                </div>


            </div>
        </div>

        <div class="col-lg-12">

        </div>




    </div>
</div><!-- .nk-block -->



@endsection
