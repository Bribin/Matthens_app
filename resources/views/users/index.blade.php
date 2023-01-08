
@extends('layouts.user-dashboard')
@section('content')

<div class="nk-block-head nk-block-head-lg">
    <div class="nk-block-between-md g-4">
        <div class="nk-block-head-content">
            <h2 class="nk-block-title ">Welcome {{ ucfirst(Auth::user()->name)  }}, to your membership area!  👋</h2>
            <div class="nk-block-des">
                <p>Welcome to our dashboard. Manage your account and your subscriptions.</p>
            </div>
        </div>
    </div>
</div><!-- .nk-block-head -->

<div class="nk-block">
    <div class="row g-gs">
        @if(count($exams ) > 0)
            @foreach($exams as $exam)
        <div class="col-sm-4 col-xl-4">

            <div class="card card-bordered h-100">
                <div class="card-inner">

                    <div class="project">
                        <div class="project-head">
                            <a href="{{ url('/') }}" class="project-title">
                                <div class="user-avatar sq bg-purple"><span>DD</span></div>
                                <div class="project-info">
                                    <h6 class="title">{{ $exam->ExamName }}</h6>
                                    <span class="sub-text">Softnio</span>
                                </div>
                            </a>
                            <div class="drodown">
                                <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger mt-n1 me-n1" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <ul class="link-list-opt no-bdr">
                                        <li><a href="html/apps-kanban.html"><em class="icon ni ni-eye"></em><span>View Project</span></a></li>
                                        <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit Project</span></a></li>
                                        <li><a href="#"><em class="icon ni ni-check-round-cut"></em><span>Mark As Done</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="project-details">
                            <p>So you've mastered the basics of building an SPA with Laravel and Inertia? Nice work, but of course there's always more to learn. In this series, we'll review a variety of useful tips and techniques to simplify and clean up your single page applications. This includes everything from creating webpack</p>
                        </div>
                        <div class="project-progress">
                            <div class="project-progress-details">
                                <div class="project-progress-task"><em class="icon ni ni-check-round-cut"></em><span>3 Tasks</span></div>
                                <div class="project-progress-percent">93.5%</div>
                            </div>
                            <div class="progress progress-pill progress-md bg-light">
                                <div class="progress-bar" data-progress="93.5"></div>
                            </div>
                        </div>
                        <div class="project-meta">
                            <ul class="project-users g-1">
                                <li>
                                    <div class="user-avatar sm bg-primary"><span>A</span></div>
                                </li>
                                <li>
                                    <div class="user-avatar sm bg-blue"><img src="./images/avatar/b-sm.jpg" alt=""></div>
                                </li>
                                <li>
                                    <div class="user-avatar bg-light sm"><span>+12</span></div>
                                </li>
                            </ul>
                            <span class="badge badge-dim bg-warning"><em class="icon ni ni-clock"></em><span>5 Days Left</span></span>
                        </div>
                    </div>

                        {{ $exams->links() }}
                </div>
            </div>
        </div>
            @endforeach
        @else

        @endif
    </div>
</div><!-- .nk-block -->


@endsection
