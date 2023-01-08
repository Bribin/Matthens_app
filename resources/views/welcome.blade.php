
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
@if(count($courses ) > 0)
    @foreach($courses as $course)
       <div class="course-item">
           <div class="col-sm-12 col-lg-12 col-xxl-12">
               <div class="card card-bordered   " style="background: #E1EAFF url('/public/backend/images/ux-cover.svg')">
                   <div class="row">
                       <div class="col-lg-4">
                           <div  class="author-box">
                               <img height="300"  src="{{ asset('backend/images/course_cover.svg') }}" >
                           </div>
                       </div>
                       <div class="col-lg-8">
                           <div class="card-inner">
                               <div class="d-flex justify-content-between align-items-start mb-3">
                                   <a href="{{ url('/course/'.$course->slug.'/overview') }}" class="d-flex align-items-center">

                                       <div >
                                           <h3 class="title mb-1">{{ $course->title }}</h3>
                                           <span class="sub-text">4 SubCategories</span>
                                       </div>
                                   </a>
                               </div>
                               <p>{!!$course->description  !!} </p>
                               <ul class="d-flex flex-wrap g-1">
                                   <li><span class="badge badge-dim bg-primary">Photoshop</span></li>
                                   <li><span class="badge badge-dim bg-danger">Adobe Illustrator</span></li>
                                   <li><span class="badge badge-dim bg-info">Logo Design</span></li>
                                   <li><span class="badge badge-dim bg-warning">Drawing</span></li>
                                   <li><span class="badge badge-dim bg-secondary">Figma</span></li>
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
    {{ $courses->links() }}
@else

@endif
@endsection
