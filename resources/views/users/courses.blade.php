
@extends('layouts.user-dashboard')
@section('content')

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
<div class="nk-block">

    <div class="row g-gs">



    @if(count($courses ) > 0)
        @foreach($courses as $course)
            <div class="col-sm-12 col-lg-12 col-xxl-12">
                <div class="card card-bordered  h-100">
                    <div class="card-inner">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <a href="{{ url('/course/'.$course->slug.'/overview') }}" class="d-flex align-items-center">
                                <div class="user-avatar sq bg-purple"><span>GD</span></div>
                                <div class="ms-3">
                                    <h6 class="title mb-1">{{ $course->title }}</h6>
                                    <span class="sub-text">4 SubCategories</span>
                                </div>
                            </a>
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger mt-n1 me-n1" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <ul class="link-list-opt no-bdr">
                                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalEdit"><em class="icon ni ni-edit"></em><span>Edit Category</span></a></li>
                                        <li><a data-bs-toggle="modal" data-bs-target="#modalDelete" href="#"><em class="icon ni ni-delete"></em><span>Delete Category</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <p>{!!$course->description  !!} </p>
                        <ul class="d-flex flex-wrap g-1">
                            <li><span class="badge badge-dim bg-primary">Photoshop</span></li>
                            <li><span class="badge badge-dim bg-danger">Adobe Illustrator</span></li>
                            <li><span class="badge badge-dim bg-info">Logo Design</span></li>
                            <li><span class="badge badge-dim bg-warning">Drawing</span></li>
                            <li><span class="badge badge-dim bg-secondary">Figma</span></li>
                        </ul>
                    </div>
                </div>
            </div>

        @endforeach
        {{ $courses->links() }}
    @else

    @endif
    </div>
</div><!-- .nk-block -->


@endsection
