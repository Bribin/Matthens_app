
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
                        {!! Form::model($exam, array( 'method' => $formMethod, 'data-parsley-validate', 'url' => $url ,'class'=>'horizontal-form' ,'files' => 'true', 'enctype'=>'multipart/form-data')) !!}
                       <div class="row gy-4">
                           <div class="col-lg-12">
                               <div class="form-group">
                                   <label class="form-label">Exam Name<span>*</span></label>
                                   <div class="form-control-wrap">
                                       {!! Form::text('ExamName',null, ['class' => 'form-control  form-select-lg', 'placeholder'=>'Exam Name','required' =>'required']) !!}
                                   </div>
                               </div>
                           </div>
                           <div class="col-lg-12">
                               <div class="form-group">
                                   <label class="form-label">Exam Code<span>*</span></label>
                                   <div class="form-control-wrap">
                                       {!! Form::text('ExamCode',null, ['class' => 'form-control  form-select-lg', 'placeholder'=>'Exam Code','required' =>'required']) !!}
                                   </div>
                               </div>
                           </div>
                           <div class="col-lg-12">
                               <div class="form-group">
                                   <label class="form-label">Exam Description<span>*</span></label>
                                   <div class="form-control-wrap">
                                       {!! Form::textarea('Description',null, ['class' => 'form-control  form-select-lg', 'placeholder'=>'Exam Description','required' =>'required']) !!}
                                   </div>
                               </div>
                           </div>
                           <div class="col-lg-12">
                               <div class="form-group">
                                   <label class="form-label" >Select Exam Category <span>*</span></label>
                                   <div class="form-control-wrap">
                                       {!! Form::select('category_list[]', [''=>'', $categoryList], null, ['data-parsley-errors-container' => '#status-errors','data-placeholder' => 'Select Course','class' => 'form-control form-control-lg js-select2', 'data-search'=>'on', 'required' =>'required']) !!}
                                       <div id="status-errors"></div>
                                   </div>
                               </div>
                           </div>
                           <div class="col-lg-12">
                               <div class="form-group">
                                   <label class="form-label">Select Exam Logo <span>*</span></label>
                                   <div class="form-control-wrap ">
                                      <div class="form-file">
                                          {!! Form::file('LogoImage' ,null, ['data-parsley-errors-container' => '#status-errors','data-placeholder' => 'Select Delivery Mode','class' => 'form-file-input', 'data-search'=>'on', 'required' =>'required']) !!}
                                      </div>
                                       <div id="status-errors"></div>
                                   </div>
                               </div>
                           </div>
                           <div class="col-lg-3">
                               <div class="form-group">
                                   <label class="form-label" >Status <span>*</span></label>
                                   <div class="form-control-wrap">
                                       {!! Form::select('IsActive', ['0'=>'In Active','1'=>'Active'] ,null, ['data-parsley-errors-container' => '#status-errors','data-placeholder' => 'Select Delivery Mode','class' => 'form-control form-control-lg js-select2', 'data-search'=>'on', 'required' =>'required']) !!}
                                       <div id="status-errors"></div>
                                   </div>
                               </div>
                           </div>
                           <div class="col-lg-3">
                               <div class="form-group">
                                   <label class="form-label" >Is Exam Single <span>*</span></label>
                                   <div class="form-control-wrap">
                                     {!! Form::select('IsSingleExam', ['0'=>'Yes','1'=>'No'] ,null, ['data-parsley-errors-container' => '#status-errors','data-placeholder' => 'Select Delivery Mode','class' => 'form-control form-control-lg js-select2', 'data-search'=>'on', 'required' =>'required']) !!}
                                       <div id="status-errors"></div>
                                   </div>
                               </div>
                           </div>
                           <div class="col-lg-3">
                               <div class="form-group">
                                   <label class="form-label" >Total Exams Count <span>*</span></label>
                                   <div class="form-control-wrap">
                                       {!! Form::text('ExamsCount',null, ['class' => 'form-control  form-select-lg', 'placeholder'=>'Total Exams Count','required' =>'required']) !!}

                                   </div>
                               </div>
                           </div>
                           <div class="col-lg-3">
                               <div class="form-group">
                                   <label class="form-label" >Total Exam Time <span>*</span></label>
                                   <div class="form-control-wrap">
                                       {!! Form::text('TimeSectionLimit',null, ['class' => 'form-control  form-select-lg', 'placeholder'=>'Total Exam Time','required' =>'required']) !!}
                                       <div id="status-errors"></div>
                                   </div>
                               </div>
                           </div>
                           <div class="col-lg-4">
                               <div class="form-group">
                                   <label class="form-label" >Sort Order<span>*</span></label>
                                   <div class="form-control-wrap">
                                       {!! Form::text('SortOrder',null, ['class' => 'form-control  form-select-lg', 'placeholder'=>'Sort Order','required' =>'required']) !!}
                                       <div id="status-errors"></div>
                                   </div>
                               </div>
                           </div>
                           <div class="col-lg-4">
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
                           <div class="col-lg-4">
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
                            <form action="{{url('dashboard/exams/'.$exam->id.'/')}}" method="post">
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
