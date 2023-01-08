@extends('layouts.dashboard') @section('css_before')
    <link rel="stylesheet" href="{{ asset('backend/css/editors/tinymce.css') }}"> @endsection @section('js_after') <script src=" {{ asset('backend/js/libs/editors/tinymce.js') }}"></script>
<script src="{{ asset('backend/js/editors.js') }}"></script> @endsection @section('content') <div class="nk-block nk-block-lg">
    <div class="row gy-4">
        <div class="col-lg-12">
            <div class="card card-bordered h-100">
                <div class="card-inner">
                    <h5 class="card-title">{{ $page_title }}</h5>
                    <div class="empty-state">
                        <div class="img-fluid mb-4 "><img height="160" src="{{ asset('backend/images/no-data.svg') }}" ></div>
                        <h6>Add First Chapter</h6>
                        <p>Use Headings for adding the Chapter Heading and Chapter Item for adding Chapter Content</p>
                        <a href="{{ url('/dashboard/batches/create') }}" class="btn btn-primary "> Add First Chapter</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4"></div>
    </div>
</div>
<!-- .nk-block --> @endsection
