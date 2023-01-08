
@extends('layouts.dashboard')
@section('content')



    <div class="nk-block-head">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">{{ $page_title  }}</h3>
                <div class="nk-block-des text-soft">
                    <p>You have total {{ $courses->count() }} Assets.</p>
                </div>
            </div><!-- .nk-block-head-content -->
            <div class="nk-block-head-content">
                <div class="toggle-wrap nk-block-tools-toggle">
                    <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                    <div class="toggle-expand-content" data-content="pageMenu">
                        <ul class="nk-block-tools g-3">
                            <li> <a href="{{ url('/dashboard/courses/create') }}" class="btn btn-primary ">Create Course</a></li>

                        </ul>
                    </div>
                </div><!-- .toggle-wrap -->
            </div><!-- .nk-block-head-content -->
        </div><!-- .nk-block-between -->
    </div><!-- .nk-block-head -->

    <div class="nk-block">
        <div class="card card-bordered card-stretch">
            <div class="card-inner-group">
                <div class="card-inner p-0 ">
                    <table class="nk-tb-list nk-tb-ulist">
                        <thead>
                        <tr class="nk-tb-item nk-tb-head">
                            <th class="nk-tb-col nk-tb-col-check">
                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                    <input type="checkbox" class="custom-control-input" id="pid-all">
                                    <label class="custom-control-label" for="pid-all"></label>
                                </div>
                            </th>
                            <th class="nk-tb-col"><span class="sub-text">Course Name</span></th>
                            <th class="nk-tb-col tb-col-xxl"><span class="sub-text">Enrolled Students</span></th>
                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></th>
                            <th class="nk-tb-col tb-col-mb"><span class="sub-text">Price</span></th>
                            <th class="nk-tb-col tb-col-mb"><span class="sub-text">Price</span></th>
                            <th class="nk-tb-col tb-col-mb"><span class="sub-text">Price</span></th>

                        </tr><!-- .nk-tb-item -->
                        </thead>
                        <tbody>
                        @if(count($courses ) > 0)
                            @foreach($courses as $course)
                        <tr class="nk-tb-item">
                            <td class="nk-tb-col nk-tb-col-check">
                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                    <input type="checkbox" class="custom-control-input" id="pid-{{ $course->id }}">
                                    <label class="custom-control-label" for="pid-{{ $course->id }}"></label>
                                </div>
                            </td>
                            <td class="nk-tb-col">
                                <a href="{{ url('/dashboard/courses/'.$course->id.'/edit') }}" class="project-title">
                                    <div class="project-info">
                                        <h6 class="title">{{ $course->title }}</h6>
                                    </div>
                                </a>
                            </td>
                            <td class="nk-tb-col tb-col-lg">
                                <span>{{ $course->categories()->pluck('title')->first() }}</span>
                            </td>
                            <td class="nk-tb-col tb-col-lg">
                                <span>{{ $course->language }}</span>
                            </td>
                            <td class="nk-tb-col tb-col-lg">
                                <span>{{ $course->level }}</span>
                            </td>
                            <td class="nk-tb-col tb-col-md">
                                <span class="badge badge-dim bg-success">{{ $course->status }}</span>
                            </td>
                            <td class="nk-tb-col tb-col-mb">
                                <span>{{ $course->price }}</span>
                            </td>
                            <td class="nk-tb-col tb-col-mb">
                                <span><a href="{{ url('/dashboard/courses/'.$course->id.'/builder') }}" class="btn btn-sm btn-outline-dark"> <em class="icon ni ni-dot-box"></em>  Course Builder</a></span>
                            </td>
                            <td class="nk-tb-col tb-col-mb">
                                <span><a href="#" class="btn btn-sm btn-outline-dark">Course Info</a></span>
                            </td>
                        </tr><!-- .nk-tb-item -->

                            @endforeach
                        @else
                            <tr class=" mb-4">
                                <td colspan="7" class="text-center  "  >
                                    <div class="empty-state">
                                        <div class="img-fluid mb-4 "><img height="160" src="{{ asset('backend/images/no-data.svg') }}" ></div>
                                        <h6>Courses are managed from here</h6>
                                        <p>You can see which ones are Created</p>
                                        <a href="{{ url('/dashboard/courses/create') }}" class="btn btn-primary "> Create Course</a>
                                    </div>
                                </td>
                            </tr>
                        @endif
                        </tbody>
                    </table><!-- .nk-tb-list -->
                </div>
                <div class="card-inner">
                    <div class="nk-block-between-md g-3">
                      {{ $courses->links() }}
                    </div><!-- .nk-block-between -->
                </div><!-- .card-inner -->
            </div>
        </div><!-- .card -->
    </div><!-- .nk-block -->




@endsection
