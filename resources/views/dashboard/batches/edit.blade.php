
@extends('layouts.dashboard')
@section('content')

    <div class="nk-block nk-block-lg">
        <div class="row gy-4">
            <div class="col-lg-12">
                <div class="card card-bordered h-100">
                    <div class="card-inner">
                        <h5 class="card-title">{{ $page_title }}</h5>
                        <hr>
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
                                       {!! Form::select('course_id', [''=>'', $courseList] , null, ['data-parsley-errors-container' => '#courseList-errors','data-placeholder' => 'Select Course','class' => 'form-select form-select-lg js-select2', 'data-search'=>'on', 'required' =>'required']) !!}
                                       <div id="courseList-errors"></div>
                                   </div>
                               </div>
                           </div>
                           <div class="col-lg-6">
                               <div class="form-group">
                                   <label class="form-label"> Batch Type <span>*</span></label>
                                   <div class="form-control-wrap">
                                       {!! Form::select('type', [''=>'','1'=>'Weekend','2'=>'Weekday','3'=>'Morning','4'=>'Evening'] ,null, ['data-parsley-errors-container' => '#batchType-errors','data-placeholder' => 'Select Delivery Mode','class' => 'form-control form-control-lg js-select2', 'data-search'=>'on', 'required' =>'required']) !!}
                                       <div id="batchType-errors"></div>
                                   </div>
                               </div>
                           </div>
                           <div class="col-lg-6">
                               <div class="form-group">
                                   <label class="form-label" >Delivery Mode <span>*</span></label>
                                   <div class="form-control-wrap">
                                       {!! Form::select('mode', [''=>'','1'=>'Delivery Mode','2'=>'Live Online Classroom','3'=>'Offline Mode'] ,null, ['data-parsley-errors-container' => '#batchMode-errors','data-placeholder' => 'Select Delivery Mode','class' => 'form-control form-control-lg js-select2', 'data-search'=>'on', 'required' =>'required']) !!}
                                       <div id="batchMode-errors"></div>
                                   </div>
                               </div>
                           </div>

                           <div class="col-lg-12">
                               <div class="form-group">
                                   <label class="form-label" >Select Mentor <span>*</span></label>
                                   <div class="form-control-wrap">
                                       {!! Form::select('mentor_id',  [''=>'', $mentorList]  , null, ['data-parsley-errors-container' => '#mentor-errors','data-placeholder' => 'Select Mentor','class' => 'form-select form-select-lg js-select2 ', 'data-search'=>'on', 'required' =>'required']) !!}
                                       <div id="mentor-errors"></div>
                                   </div>
                               </div>
                           </div>
                           <div class="col-lg-12">
                               <div class="form-group">
                                   <label class="form-label" >Description </label>
                                   <div class="form-control-wrap">
                                       {!! Form::textarea('description',null, ['class' => 'form-control form-control-lg', 'placeholder'=>'Enter Description']) !!}
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
                                       {!! Form::text('start_date', null , ['data-parsley-errors-container' => '#startDate-errors','class' => 'form-control form-control-lg date-picker','required' =>'required']) !!}
                                       <div id="startDate-errors"></div>
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
                                       {!! Form::text('end_date', null, ['data-parsley-errors-container' => '#endDate-errors','class' => 'form-control  form-control-lg date-picker',  'required' =>'required']) !!}
                                       <div id="endDate-errors"></div>
                                   </div>
                               </div>
                           </div>

                           <div class="col-lg-6">
                               <div class="form-group">
                                   <label class="form-label" >Start Time <span>*</span></label>
                                   <div class="form-control-wrap">
                                       <div class="form-icon form-icon-left">
                                           <em class="icon ni ni-clock"></em>
                                       </div>
                                       {!! Form::text('start_time', null, ['data-parsley-errors-container' => '#startTime-errors','data-placeholder' => 'Select Course','class' => 'form-control  form-control-lg time-picker', 'required' =>'required']) !!}
                                       <div id="startTime-errors"></div>
                                   </div>
                               </div>
                           </div>
                           <div class="col-lg-6">
                               <div class="form-group">
                                   <label class="form-label" >Duration <span>*</span></label>
                                   <div class="form-control-wrap">
                                       <div class="form-icon form-icon-left">
                                           <em class="icon ni ni-clock"></em>
                                       </div>
                                       {!! Form::text('duration', null, ['data-parsley-errors-container' => '#duration-errors','data-placeholder' => 'Select Duration','class' => 'form-control form-control-lg  ',  'required' =>'required']) !!}
                                       <div id="duration-errors"></div>
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
