
@extends('layouts.dashboard')
@section('content')



    <div class="nk-block-head">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">{{ $page_title  }}</h3>
                <div class="nk-block-des text-soft">
                    <p>You have total {{ $users->count() }} Users.</p>
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
                <div class="card-inner p-0">
                    <table class="nk-tb-list nk-tb-ulist">
                        <thead>
                        <tr class="nk-tb-item nk-tb-head">
                            <th class="nk-tb-col nk-tb-col-check">
                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                    <input type="checkbox" class="custom-control-input" id="pid-all">
                                    <label class="custom-control-label" for="pid-all"></label>
                                </div>
                            </th>
                            <th class="nk-tb-col"><span class="sub-text">User Name</span></th>
                            <th class="nk-tb-col tb-col-xxl"><span class="sub-text">User Email</span></th>
                            <th class="nk-tb-col tb-col-md"><span class="sub-text">User Role</span></th>
                            <th class="nk-tb-col tb-col-mb"><span class="sub-text">Price</span></th>
                            <th class="nk-tb-col nk-tb-col-tools text-end">
                                <ul class="nk-tb-actions gx-1">
                                    <li>
                                        <div class="dropdown">
                                            <a href="#" class="btn btn-sm btn-trigger btn-icon dropdown-toggle" data-bs-toggle="dropdown" data-offset="0,5"><em class="icon ni ni-more-h"></em></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <ul class="link-list-opt no-bdr">
                                                    <li><a href="#"><em class="icon ni ni-archive"></em><span>Mark As Archive</span></a></li>
                                                    <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Category</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </th>
                        </tr><!-- .nk-tb-item -->
                        </thead>
                        <tbody>
                        @if(count($users ) > 0)
                            @foreach($users as $user)
                                <tr class="nk-tb-item">
                                    <td class="nk-tb-col nk-tb-col-check">
                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                            <input type="checkbox" class="custom-control-input" id="pid-01">
                                            <label class="custom-control-label" for="pid-01"></label>
                                        </div>
                                    </td>
                                    <td class="nk-tb-col">
                                        <a href="{{ url('/dashboard/users/'.$user->id.'/edit') }}" class="project-title">
                                            <div class="user-avatar sq bg-purple"><span>RD</span></div>
                                            <div class="project-info">
                                                <h6 class="title">{{ $user->name }}</h6>
                                            </div>
                                        </a>
                                    </td>
                                    <td class="nk-tb-col tb-col-lg">
                                        <span>{{ $user->email }}</span>
                                    </td>
                                    <td class="nk-tb-col tb-col-lg">
                                        <span>{{ $user->phone }}</span>
                                    </td>
                                    <td class="nk-tb-col tb-col-lg">
                                        <span>{{ $user->type }}</span>
                                    </td>
                                    <td class="nk-tb-col tb-col-lg">
                                        <span>Alex Ashley</span>
                                    </td>

                                    <td class="nk-tb-col nk-tb-col-tools">
                                        <ul class="nk-tb-actions gx-1">
                                            <li>
                                                <div class="drodown">
                                                    <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalEdit"><em class="icon ni ni-edit"></em><span>Edit Course</span></a></li>
                                                            <li><a data-bs-toggle="modal" data-bs-target="#modalDelete" href="#"><em class="icon ni ni-delete"></em><span>Delete Course</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr><!-- .nk-tb-item -->

                            @endforeach
                        @else

                        @endif
                        </tbody>
                    </table><!-- .nk-tb-list -->
                </div>
                <div class="card-inner">
                    <div class="nk-block-between-md g-3">
                        {{ $users->links() }}
                    </div><!-- .nk-block-between -->
                </div><!-- .card-inner -->
            </div>
        </div><!-- .card -->
    </div><!-- .nk-block -->




@endsection
