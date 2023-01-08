
@extends('layouts.dashboard')
@section('content')
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">{{ $page_title }}</h3>
                <div class="nk-block-des text-soft">

                </div>
            </div><!-- .nk-block-head-content -->

        </div><!-- .nk-block-between -->
    </div><!-- .nk-block-head -->
    <div class="nk-block nk-block-lg">
        <div class="row g-gs">
            <div class="col-lg-12">
                <div class="card card-bordered h-100">
                    <div class="card-inner">
                        {!! Form::model($job, array( 'method' => $formMethod, 'data-parsley-validate', 'url' => $url ,'class'=>'horizontal-form' ,'files' => 'true', 'enctype'=>'multipart/form-data')) !!}
                        <div class="form-group">
                            <label class="form-label" >Job Title <span>*</span></label>
                            <div class="form-control-wrap">
                                {!! Form::text('title',null, ['class' => 'form-control  form-control-lg', 'placeholder'=>'Enter Asset Name','required' =>'required']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Job Location <span>*</span></label>
                            <div class="form-control-wrap">
                                {!! Form::text('location',null, ['class' => 'form-control  form-select-lg', 'placeholder'=>'Job Location','required' =>'required']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" >Job type <span>*</span></label>
                            <div class="form-control-wrap">
                                {!! Form::select('status',[''=>'','0'=>'Full-Time','1'=>'Part-Time','2'=>'Internship'] ,null, ['data-parsley-errors-container' => '#status-errors','data-placeholder' => 'Select Status','class' => 'form-control form-control-lg form-select', 'data-search'=>'off', 'required' =>'required']) !!}
                                <div id="status-errors"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" >URL to Description/Application<span>*</span></label>
                            <div class="form-control-wrap">
                                {!! Form::text('title',null, ['class' => 'form-control  form-control-lg', 'placeholder'=>'URL to Description/Application*','required' =>'required']) !!}
                            </div>

                        </div>

                        <div class="form-group">
                            <label class="form-label" >Tags<span>*</span></label>
                            <div class="form-control-wrap">

                                {!! Form::select('tag_list[]', $tagsList, null, ['data-parsley-errors-container' => '#tag-errors','data-placeholder' => 'Select Tags','class' => 'form-control form-select','multiple','data-select2-tags'=>'true','id'=>'tags','data-search'=>'on', 'required' =>'required']) !!}
                                <div id="tag-errors"></div>

                            </div>

                        </div>
                        <div class="form-group">
                            <label class="form-label" >Note <span>*</span></label>
                            <div class="form-control-wrap">
                                {!! Form::textarea('note',null, ['class' => 'form-control ', 'placeholder'=>'Enter Special Notes']) !!}
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="form-label" > Status <span>*</span></label>
                            <div class="form-control-wrap">
                                {!! Form::select('status',[''=>'','0'=>'Active','1'=>'Inactive'] ,null, ['data-parsley-errors-container' => '#status-errors','data-placeholder' => 'Select Status','class' => 'form-control form-select', 'data-search'=>'off', 'required' =>'required']) !!}
                                <div id="status-errors"></div>
                            </div>

                        </div>

                        <div class="form-group">

                            <button type="submit" class=" float-right btn btn-lg btn-primary">Save</button>
                        </div>

                        {!! Form::close() !!}
                        @if ($mode  === 'EDIT')

                            <form action="{{url('dashboard/calendars/'.$job>id.'/')}}" method="post">
                                @method('DELETE')
                                @csrf
                                <button onclick="return confirm('Are you sure?')"   class="btn btn-link" type="submit">Delete Category</button>
                            </form>
                        @else

                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-4">

            </div>
        </div>
    </div><!-- .nk-block -->


@endsection
