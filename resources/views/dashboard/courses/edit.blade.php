@extends('layouts.dashboard') @section('css_before')
    <link rel="stylesheet" href="{{ asset('backend/css/editors/tinymce.css') }}"> @endsection @section('js_after') <script src=" {{ asset('backend/js/libs/editors/tinymce.js') }}"></script>
<script src="{{ asset('backend/js/editors.js') }}"></script> @endsection @section('content') <div class="nk-block nk-block-lg">
    <div class="row gy-4">
        <div class="col-lg-12">
            <div class="card card-bordered h-100">
                <div class="card-inner">
                    <h5 class="card-title">{{ $page_title }}</h5>
                    <hr> {!! Form::model($course, array( 'method' => $formMethod, 'data-parsley-validate', 'url' => $url ,'class'=>'horizontal-form' ,'files' => 'true', 'enctype'=>'multipart/form-data')) !!} <div class="row gy-4">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-label">Course Title <span>*</span>
                                </label>
                                <div class="form-control-wrap"> {!! Form::text('title',null, ['class' => 'form-control form-control-lg', 'placeholder'=>'Enter Course Title ','required' =>'required']) !!} </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-label">Course Description <span>*</span>
                                </label>
                                <div class="form-control-wrap"> {!! Form::textarea('description',null, ['class' => ' tinymce-toolbar form-control form-control-lg', 'placeholder'=>'Enter Course Description']) !!} </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="category_list" class="form-label">Course category <span>*</span>
                                </label>
                                <div class="form-control-wrap"> {!! Form::select('category_list[]', [''=>'', $categoryList] , null, ['data-parsley-errors-container' => '#category-errors','data-placeholder' => 'Select Category','class' => 'form-select form-select-lg js-select2', 'data-search'=>'off', 'required' =>'required']) !!} <div id="category-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-label">Select Language <span>*</span>
                                </label>
                                <div class="form-control-wrap"> {!! Form::select('language',[''=>'','0'=>'English','1'=>'Malayalam'] ,null, ['data-parsley-errors-container' => '#language-errors','data-placeholder' => 'Select Language','class' => 'form-control js-select2', 'data-search'=>'off', 'required' =>'required']) !!} <div id="language-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-label">Select Level <span>*</span>
                                </label>
                                <div class="form-control-wrap"> {!! Form::select('level',[''=>'','0'=>'Beginner','1'=>'Intermediate','2'=>'Advanced'] ,null, ['data-parsley-errors-container' => '#level-errors','data-placeholder' => 'Select Status','class' => 'form-control js-select2', 'data-search'=>'off', 'required' =>'required']) !!} <div id="level-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-label">Tags <span>*</span>
                                </label>
                                <div class="form-control-wrap"> {!! Form::select('tag_list[]', $tagsList ,null, ['data-parsley-errors-container' => '#taglist-errors','data-placeholder' => 'Select Tags','class' => 'form-select-lg form-select-lg js-select2', 'data-select2-tags'=>'true','data-search'=>'off', 'multiple'=>'multiple','required' =>'required']) !!} <div id="taglist-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-label">Course Preview Image <span>*</span>
                                </label>
                                <div class="form-control-wrap"> {!! Form::file('cover_image',null, ['data-parsley-errors-container' => '#coverimage-errors','data-placeholder' => 'Select Status','class' => 'form-control form-control-lg js-select2', 'data-search'=>'off', 'required' =>'required']) !!} <p> For white backgrounds. We recommend logo size of 660x330 pixels. Wider logos will be re-sized to scale. (.jpg or .png) </p>
                                    <div id="coverimage-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-label">Course Video URL <span>*</span>
                                </label>
                                <div class="form-control-wrap"> {!! Form::text('intro_url',null, ['class' => 'form-control form-select-lg', 'placeholder'=>'https://vimeo.com/225519343','required' =>'required']) !!} </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-control-wrap">
                                <label class="form-label"> List price <span>*</span></label>
                                <div class="input-group">

                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">₹</span>

                                    </div> {!! Form::text('price',null, ['data-parsley-errors-container' => '#price-errors','class' => 'form-control form-control-lg', 'placeholder'=>'Price','required' =>'required']) !!}
                                </div>
                                <div id="price-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-control-wrap">
                                <div class="form-control-wrap">
                                    <label class="form-label"> Final payable price <span>*</span></label>
                                    <div class="input-group">

                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">₹</span>
                                        </div> {!! Form::text('discount_price',null, ['data-parsley-errors-container' => '#dprice-errors','class' => 'form-control form-control-lg', 'placeholder'=>'Discount Price','required' =>'required']) !!}
                                    </div>
                                    <div id="dprice-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-label"> Status <span>*</span>
                                </label>
                                <div class="form-control-wrap"> {!! Form::select('status',[''=>'','0'=>'Active','1'=>'Inactive'] ,null, ['data-parsley-errors-container' => '#status-errors','data-placeholder' => 'Select Status','class' => 'form-select-lg js-select2', 'data-search'=>'off', 'required' =>'required']) !!} <div id="status-errors"></div>
                                    <div id="status-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 ">
                          <div class="form-group">
                              <button type="submit" class=" float-right btn btn-lg btn-primary">Save</button>
                          </div>
                      </div>
                        {!! Form::close() !!}

                        <div class="col-lg-6">
                            @if ($mode === 'EDIT') <form action="{{url('dashboard/courses/'.$course->id.'/')}}" method="post"> @method('DELETE') @csrf <button class="btn btn-danger" onclick="return confirm('Are you sure?')" class="btn btn-link" type="submit">Delete Course</button>
                            </form> @else @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4"></div>
    </div>
</div>
<!-- .nk-block --> @endsection
