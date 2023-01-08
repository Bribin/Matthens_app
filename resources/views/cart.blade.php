
@extends('layouts.user-dashboard')

@section('content')

{{--{{ $courses }}--}}
<!-- Courses Start -->

<section class="section" id="courses">
    <div class="container">


        <div class="row gy-4">

            <div class="col-lg-6">
                <div class="card">

                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <h4 class="nk-block-title">Join Matthens Academy </h4>
                            <div class="nk-block-des">
                                <p>Become a UX designer, UI designer or web developer from scratch.</p>
                            </div>
                        </div>
                    </div>
                    <form class="horizontal-form" method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                            <label class="form-label" for="name">Full name</label>
                            <input id="name" type="text" class="form-control form-control-lg  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="email">Email address</label>
                            <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label">Select Bootcamp dates</label>
                            <div class="form-control-wrap">
                                <select class="form-select js-select2" data-search="on">
                                    <option value="default_option">Default Option</option>
                                    <option value="option_select_name">Option select name</option>
                                    <option value="option_select_name">Option select name</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="password">Password</label>
                            <div class="form-control-wrap">
                                <a href="#" class="form-icon form-icon-right passcode-switch" data-target="password">
                                    <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                    <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                </a>
                                <input id="password" type="password" class="form-control form-control-lg  @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="password">Confirm password</label>
                            <div class="form-control-wrap">
                                <a href="#" class="form-icon form-icon-right passcode-switch" data-target="password">
                                    <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                    <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                </a>
                                <input id="password-confirm" type="password" class="form-control form-control-lg" name="password_confirmation" required autocomplete="new-password">

                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-lg btn-primary btn-block">Create Account</button>
                        </div>
                    </form>
                    <div class="form-note-s2 text-sm-left pt-4"> By clicking the "Enroll now" button, you are enroling in a Matthens Bootcamp, and you agree to Matthens's Terms of Use and Privacy Policy. </a>
                    </div>


                </div>
            </div>
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- Courses End -->


@endsection
