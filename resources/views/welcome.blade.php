
@extends('layouts.guest')
@section('content')
<!-- Hero Start -->
<div class="nk-block-head nk-block-head-lg">
    <div class="nk-block-between-md g-4">
        <div class="nk-block-head-content">
            <h2 class="nk-block-title ">Choose a course to upskill your career</h2>
            <div class="nk-block-des">
                <p>100+ Live online courses chosen by 50000+ working professionals</p>
            </div>
            <div class="nk-block-des">
                <p>All Courses with Live Class | 24x7 Support | Life-time Access</p>
            </div>
        </div>
    </div>
</div><!-- .nk-block-head -->
@if(count($exams ) > 0)
    @foreach($exams as $exam)
       <div class="course-item pb-4">
           <div class="col-12">
               <div class="card card-bordered   "style="background: #E1EAFF">
                   <div class="row">
                       <div class="col-lg-12 ">
                           <div class="card-inner">
                               <div class="d-flex justify-content-between align-items-start mb-3">
                                   <a href="{{ url('/exams/'.$exam->ExamCode.'/exam-papers') }}" class="d-flex align-items-center">
                                       <div >
                                           <h3 class="title mb-1">{{ $exam->Name }}</h3>
                                           <span class="sub-text">{{ $exam->Description }}</span>
                                       </div>
                                   </a>
                               </div>
                               <p>{!!$exam->description  !!} </p>
                               <ul class="d-flex flex-wrap g-1">
                                   <li><span class="badge badge-dim bg-primary">{{ $exam->ExamCode }}</span></li>

                               </ul>
                               <div class="mt-5">
                                   <a href="#" class="btn btn-primary ">Start Course</a>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
    @endforeach
    {{ $exams->links() }}
@else

@endif
@endsection
