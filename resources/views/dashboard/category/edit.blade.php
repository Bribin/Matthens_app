@extends('layouts.dashboard') @section('content') <div class="nk-block nk-block-lg">
    <div class="row gy-4">
        <div class="col-lg-12">
            <div class="card card-bordered h-100">
                <div class="card-inner">
                    <h5 class="card-title">{{ $page_title }}</h5>
                    <hr> {!! Form::model($category, array( 'method' => $formMethod, 'data-parsley-validate', 'url' => $url ,'class'=>'horizontal-form' ,'files' => 'true', 'enctype'=>'multipart/form-data')) !!} <div class="row gy-4">
                        {!! Form::text('type',Request::get('type'), ['hidden','required' =>'required']) !!}
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-label">Category Title <span>*</span></label>
                                <div class="form-control-wrap">
                                    {!! Form::text('title',null, ['class' => 'form-control form-control-lg', 'placeholder'=>'Enter Category Title','required' =>'required']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-label">Category Description</label>
                                <div class="form-control-wrap">
                                    {!! Form::textarea('description',null, ['class' => 'form-control form-control-lg', 'placeholder'=>'Enter Category Description']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-label">Order <span>*</span>
                                </label>
                                <div class="form-control-wrap"> {!! Form::number('order', 0, ['class' => 'form-control form-control-lg', 'placeholder'=>'Enter Asset Name','required' =>'required']) !!} </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label"> Status <span>*</span>
                            </label>
                            <div class="form-control-wrap">
                                {!! Form::select('status',[''=>'','0'=>'Active','1'=>'Inactive'] ,null, ['data-parsley-errors-container' => '#status-errors','data-placeholder' => 'Select Status','class' => 'form-control  form-control-lg js-select2 ', 'data-search'=>'off', 'required' =>'required']) !!} <div id="status-errors"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class=" float-right btn btn-lg btn-primary">Save</button>
                        </div> {!! Form::close() !!} @if ($mode === 'EDIT') <form action="{{url('dashboard/calendars/'.$category->id.'/')}}" method="post"> @method('DELETE') @csrf <button onclick="return confirm('Are you sure?')" class="btn btn-link" type="submit">Delete Category</button>
                        </form> @else @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4"></div>
    </div>
</div>
<!-- .nk-block --> @endsection
