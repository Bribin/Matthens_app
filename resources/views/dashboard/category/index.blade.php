
@extends('layouts.dashboard')
@section('content')



    <div class="nk-block-head">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">{{ $page_title  }}</h3>
                <div class="nk-block-des text-soft">
                    <p>You have total {{ $categories->count() }} Category.</p>
                </div>
            </div><!-- .nk-block-head-content -->
            <div class="nk-block-head-content">
                <div class="toggle-wrap nk-block-tools-toggle">
                    <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                    <div class="toggle-expand-content" data-content="pageMenu">
                        <ul class="nk-block-tools g-3">
                            <li>  <a href="{{ url('/dashboard/categories/create?type='.request()->query('type')) }}" class="btn btn-primary ">Create Category</a></li>

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
                            <th class="nk-tb-col"><span class="sub-text">Category Title</span></th>
                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Description</span></th>
                            <th class="nk-tb-col tb-col-xxl"><span class="sub-text">Order</span></th>
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
                        @if(count($categories ) > 0)
                            @foreach($categories as $category)
                        <tr class="nk-tb-item">
                            <td class="nk-tb-col nk-tb-col-check">
                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                    <input type="checkbox" class="custom-control-input" id="pid-01">
                                    <label class="custom-control-label" for="pid-01"></label>
                                </div>
                            </td>
                            <td class="nk-tb-col">
                                <a href="{{ url('/dashboard/categories/'.$category->id.'/edit') }}" class="project-title">

                                    <div class="project-info">
                                        <h6 class="title">{{ $category->title }}</h6>
                                    </div>
                                </a>
                            </td>
                            <td class="nk-tb-col tb-col-lg">
                                <span>{{ $category->description }}</span>
                            </td>


                            <td class="nk-tb-col tb-col-md">
                                <span class="badge badge-dim bg-success">{{ $category->status }}</span>
                            </td>


                        </tr><!-- .nk-tb-item -->

                            @endforeach
                        @else
                            <tr class=" mb-4">
                                <td colspan="7" class="text-center  "  >
                                    <div class="empty-state">
                                        <div class="img-fluid mb-4 "><img height="160" src="{{ asset('backend/images/no-data.svg') }}" ></div>
                                        <h6>Categories are managed from here</h6>
                                        <p>You can see which ones are Created, viewed, partially or fully paid.</p>
                                        <a href="{{ url('/dashboard/categories/create?type='.request()->query('type')) }}" class="btn btn-primary ">Create Category</a>
                                    </div>
                                </td>
                            </tr>
                        @endif
                        </tbody>
                    </table><!-- .nk-tb-list -->
                </div>
                <div class="card-inner">
                    <div class="nk-block-between-md g-3">
                      {{ $categories->links() }}
                    </div><!-- .nk-block-between -->
                </div><!-- .card-inner -->
            </div>
        </div><!-- .card -->
    </div><!-- .nk-block -->




@endsection
