
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
        <div class="row gy-4">
            <div class="col-lg-12">
                <div class="card card-bordered h-100">
                    <div class="card-inner">
                        {!! Form::model($batch, array( 'method' => $formMethod, 'data-parsley-validate', 'url' => $url ,'class'=>'horizontal-form' ,'files' => 'true', 'enctype'=>'multipart/form-data')) !!}
                       <div class="row gy-4">
                           <div class="col-lg-12">
                               <div class="form-group">
                                   <label class="form-label">Batch Name <span>*</span></label>
                                   <div class="form-control-wrap">
                                       {!! Form::text('title',null, ['class' => 'form-control  form-select-lg', 'placeholder'=>'Batch Name','required' =>'required']) !!}
                                   </div>
                               </div>
                           </div>
                           <div class="col-lg-12">
                               <div class="form-group">
                                   <label class="form-label" >Select Course <span>*</span></label>
                                   <div class="form-control-wrap">
                                       {!! Form::select('course_id', $courseList ,null, ['data-parsley-errors-container' => '#status-errors','data-placeholder' => 'Select Course','class' => 'form-control form-control-lg js-select2', 'data-search'=>'on', 'required' =>'required']) !!}
                                       <div id="status-errors"></div>
                                   </div>
                               </div>
                           </div>
                           <div class="col-lg-6">
                               <div class="form-group">
                                   <label class="form-label"> Batch Type <span>*</span></label>
                                   <div class="form-control-wrap">
                                       {!! Form::select('course_id', ['0'=>'Select Type','1'=>'Weekend','2'=>'Weekday','3'=>'Morning','4'=>'Evening'] ,null, ['data-parsley-errors-container' => '#status-errors','data-placeholder' => 'Select Delivery Mode','class' => 'form-control form-control-lg js-select2', 'data-search'=>'on', 'required' =>'required']) !!}
                                       <div id="status-errors"></div>
                                   </div>
                               </div>
                           </div>
                           <div class="col-lg-6">
                               <div class="form-group">
                                   <label class="form-label" >Delivery Mode <span>*</span></label>
                                   <div class="form-control-wrap">
                                       {!! Form::select('course_id', ['0'=>'Delivery Mode','1'=>'Live Online Classroom','2'=>'Offline Mode'] ,null, ['data-parsley-errors-container' => '#status-errors','data-placeholder' => 'Select Delivery Mode','class' => 'form-control form-control-lg js-select2', 'data-search'=>'on', 'required' =>'required']) !!}
                                       <div id="status-errors"></div>
                                   </div>
                               </div>
                           </div>

                           <div class="col-lg-12">
                               <div class="form-group">
                                   <label class="form-label" >Select Mentor <span>*</span></label>
                                   <div class="form-control-wrap">
                                       {!! Form::select('course_id', $courseList ,null, ['data-parsley-errors-container' => '#status-errors','data-placeholder' => 'Select Course','class' => 'form-control form-control-lg js-select2', 'data-search'=>'on', 'required' =>'required']) !!}
                                       <div id="status-errors"></div>
                                   </div>
                               </div>
                           </div>
                           <div class="col-lg-12">
                               <div class="form-group">
                                   <label class="form-label" >Description </label>
                                   <div class="form-control-wrap">
                                       {!! Form::textarea('description',null, ['class' => 'form-control ', 'placeholder'=>'Enter Special Notes']) !!}
                                   </div>
                               </div>
                           </div>
                           <div class="col-lg-6">
                               <div class="form-group">
                                   <label class="form-label" >Start Date <span>*</span></label>
                                   <div class="form-control-wrap">
                                       <div class="form-icon form-icon-left">
                                           <em class="icon ni ni-calendar"></em>
                                       </div>
                                       {!! Form::text('start_date', null, ['data-date-format'=>'d MM DD, yyyy','data-parsley-errors-container' => '#status-errors','data-placeholder' => 'Select Course','class' => 'form-control date-picker', 'data-search'=>'off', 'required' =>'required']) !!}
                                       <div id="status-errors"></div>
                                   </div>
                               </div>
                           </div>
                           <div class="col-lg-6">
                               <div class="form-group">
                                   <label class="form-label" >End Date <span>*</span></label>
                                   <div class="form-control-wrap">
                                       <div class="form-icon form-icon-left">
                                           <em class="icon ni ni-calendar"></em>
                                       </div>
                                       {!! Form::text('end_date', null, ['data-date-format'=>'d MM DD, yyyy','data-parsley-errors-container' => '#status-errors','data-placeholder' => 'Select Course','class' => 'form-control date-picker', 'data-search'=>'off', 'required' =>'required']) !!}
                                       <div id="status-errors"></div>
                                   </div>
                               </div>
                           </div>
                           <div class="col-lg-6">
                               <div class="form-group">
                                   <label class="form-label" >Price <span>*</span></label>
                                   <div class="form-control-wrap">
                                       <div class="form-control-wrap">
                                           <div class="input-group">
                                               <div class="input-group-prepend">
                                                   <span class="input-group-text" id="basic-addon1">₹</span>
                                               </div>
                                               <input type="text" class="form-control" placeholder="Discount Price" required=""></div></div>
                                   </div>
                               </div>
                           </div>
                           <div class="col-lg-6">
                               <div class="form-group">
                                   <label class="form-label" >Discount Price</label>
                                   <div class="form-control-wrap">
                                       <div class="form-control-wrap">
                                           <div class="input-group">
                                               <div class="input-group-prepend">
                                                   <span class="input-group-text" id="basic-addon1">₹</span>
                                               </div>
                                               <input type="text" class="form-control" placeholder="Price" required=""></div></div>
                                   </div>
                               </div>
                           </div>
                           <div class="form-group">
                               <button type="submit" class=" float-left btn btn-lg btn-primary">Save</button>
                           </div>
                       </div>

                        {!! Form::close() !!}
                        @if ($mode  === 'EDIT')
                            <form action="{{url('dashboard/calendars/'.$batch->id.'/')}}" method="post">
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
