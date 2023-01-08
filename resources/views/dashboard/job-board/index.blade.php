@extends('layouts.dashboard')

    @section('content')
        <div class="nk-block-head">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">{{ $page_title  }}</h3>
                    <div class="nk-block-des text-soft">
                        <p>You have total {{ $jobs->count() }} Assets.</p>
                    </div>
                </div><!-- .nk-block-head-content -->
                <div class="nk-block-head-content">
                    <div class="toggle-wrap nk-block-tools-toggle">
                        <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                        <div class="toggle-expand-content" data-content="pageMenu">
                            <ul class="nk-block-tools g-3">
                                <li><a href="#" class="btn btn-white btn-outline-light"><em class="icon ni ni-download-cloud"></em><span>Export</span></a></li>
                                <li class="nk-block-tools-opt">
                                    <div class="drodown">
                                        <a href="#" class="dropdown-toggle btn btn-icon btn-primary" data-bs-toggle="dropdown"><em class="icon ni ni-plus"></em></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a href="#"><span>Add User</span></a></li>
                                                <li><a href="#"><span>Add Team</span></a></li>
                                                <li><a href="#"><span>Import User</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
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
                                <th class="nk-tb-col"><span class="sub-text">Job Title</span></th>
                                <th class="nk-tb-col tb-col-xxl"><span class="sub-text">Type</span></th>
                                <th class="nk-tb-col tb-col-md"><span class="sub-text">Location</span></th>
                                <th class="nk-tb-col tb-col-md"><span class="sub-text">Last Date</span></th>
                                <th class="nk-tb-col nk-tb-col-tools text-end">

                                </th>
                            </tr><!-- .nk-tb-item -->
                            </thead>
                            <tbody>
                            @if(count($jobs ) > 0)
                                @foreach($jobs as $job)
                                    <tr class="nk-tb-item">
                                        <td class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="{{ $job->id }}">
                                                <label class="custom-control-label" for="{{ $job->id }}"></label>
                                            </div>
                                        </td>
                                        <td class="nk-tb-col">
                                            <a href="{{ url('/dashboard/job-board/'.$job->id.'/edit') }}" class="project-title">
                                                <div class="user-avatar sq bg-purple"><span>RD</span></div>
                                                <div class="project-info">
                                                    <h6 class="title">{{ $job->title }}</h6>
                                                    <p>{{ $job->organization }}</p>
                                                </div>
                                            </a>
                                        </td>
                                        <td class="nk-tb-col tb-col-lg">
                                            <span class="badge badge-dim bg-success">{{ $job->type }}</span>
                                            <span></span>
                                        </td>
                                        <td class="nk-tb-col tb-col-md">
                                            <span>{{ $job->location }}</span>
                                        </td>
                                    </tr><!-- .nk-tb-item -->

                                @endforeach
                            @else
                                <tr class=" mb-4">
                                    <td colspan="7" class="text-center  "  >
                                        <div class="empty-state">
                                            <div class="img-fluid mb-4 "><img height="160" src="{{ asset('backend/images/no-data.svg') }}" ></div>
                                            <h6>Batches are managed from here</h6>
                                            <p>You can see which ones are Created, viewed, partially or fully paid.</p>
                                            <a href="{{ url('/dashboard/batches/create') }}" class="btn btn-primary "> Schedule a Batch</a>
                                        </div>
                                    </td>
                                </tr>
                            @endif
                            </tbody>
                        </table><!-- .nk-tb-list -->
                    </div>
                    <div class="card-inner">
                        <div class="nk-block-between-md g-3">
                            {{ $jobs->links() }}
                        </div><!-- .nk-block-between -->
                    </div><!-- .card-inner -->
                </div>
            </div><!-- .card -->
        </div><!-- .nk-block -->

    @endsection


