@extends('layouts.guest')

@section('content')

    <div class="nk-block nk-block-lg" style="">
        <div class="row">
            <div class="col-lg-6">
                <div class="nk-block-head">
                    <div class="nk-block-head-content">
                        <h4 class="nk-block-title">Join Matthens Academy </h4>
                        <div class="nk-block-des">
                            <p>Instructor-Led Online Training with 24X7 Lifetime Support</p>
                            <p>A beginning of the Digital University for Industry 4.0, where one can find the relevant courses to upgrade skills from the top experts and gear up for Industry 4.0, an initiative from Talrop.</p>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="card card-bordered">
                    <div class="card-inner">
                        <form action="{{ route('register') }}"  data-parsley-validate="data-parsley-validate" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name-1">Enter your Full Name</label>
                                        <div class="form-control-wrap">
                                            <input id="name" type="text" data-parsley-error-message="Please enter your full name." data-parsley-type="text" placeholder="Please enter your full name." data-parsley-trigger="change" class="form-control form-control-lg  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                               <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no-1">Enter your registered email Id</label>
                                        <div class="form-control-wrap">
                                            <input id="email" type="email"  placeholder="Please enter your email address." data-parsley-error-message="Enter your email address" data-parsley-type="email" data-parsley-trigger="change"  class="form-control form-control-lg @error('email') is-invalid @enderror" name="email"  value="{{ old('email') }}" required autocomplete="email">
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                             </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label" for="pay-amount-1">Enter your registered phone number</label>
                                        <div class="form-control-wrap">
                                            <input id="Phone" data-parsley-type="integer" placeholder="Please enter your mobile number" data-parsley-trigger="change" type="number"  data-parsley-error-message="Enter your registered phone number" class="form-control form-control-lg @error('email') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">
                                            @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                             </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 ">
                                    <div class="form-group  float-right">
                                        <button type="submit" class="btn btn-lg btn-primary ">Proceed</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <div class="col-lg-6">
                <div class="intro-image">
                    <img class="img-fluid" src="{{ asset('backend/images/hero_image@2x.avif') }}"   alt="">
                </div>
            </div>
        </div>

    </div>


    <div class="card">


        <div class="form-note-s2 text-sm-left pt-4"> Disclaimer: Matthens reserves the right to cancel or reschedule events in case of insufficient registrations, or if presenters cannot attend due to unforeseen circumstances. You are therefore advised to consult a Matthens agent prior to making any travel arrangements for a workshop. For more details, please refer <a href="#"> Cancellation & Refund Policy</a> .
            </a>
        </div>

        <div class="form-note-s2 text-sm-left pt-4"> By clicking the "Enroll now" button, you are enroling in a Matthens Bootcamp, and you agree to Matthens's Terms of Use and Privacy Policy. </a>
        </div>


    </div>

    {{--            <div class="row g-gs">--}}
    {{--                <form class="horix" method="POST" action="{{ route('register') }}">--}}
    {{--                    @csrf--}}
    {{--                <div class="col-sm-6">--}}
    {{--                    <div class="form-group">--}}
    {{--                        <label class="form-label" for="name">First Name</label>--}}
    {{--                        <div class="form-control-wrap">--}}
    {{--                            <input id="name" type="text" class="form-control form-control-lg  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>--}}
    {{--                            @error('name')--}}
    {{--                            <span class="invalid-feedback" role="alert">--}}
    {{--                                            <strong>{{ $message }}</strong>--}}
    {{--                                        </span>--}}
    {{--                            @enderror--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-sm-6">--}}
    {{--                    <div class="form-group">--}}
    {{--                        <label class="form-label" for="name">Last Name</label>--}}
    {{--                        <div class="form-control-wrap">--}}
    {{--                            <input id="name" type="text" class="form-control form-control-lg  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>--}}
    {{--                            @error('name')--}}
    {{--                            <span class="invalid-feedback" role="alert">--}}
    {{--                                            <strong>{{ $message }}</strong>--}}
    {{--                                        </span>--}}
    {{--                            @enderror--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-sm-6">--}}
    {{--                    <div class="form-group">--}}
    {{--                        <label class="form-label" for="name">Emai</label>--}}
    {{--                        <div class="form-control-wrap">--}}
    {{--                            <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">--}}
    {{--                            @error('name')--}}
    {{--                            <span class="invalid-feedback" role="alert">--}}
    {{--                                            <strong>{{ $message }}</strong>--}}
    {{--                                        </span>--}}
    {{--                            @enderror--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-sm-6">--}}
    {{--                    <div class="form-group">--}}
    {{--                        <label class="form-label" for="name">Phone Number</label>--}}
    {{--                        <div class="form-control-wrap">--}}
    {{--                            <input id="name" type="text" class="form-control form-control-lg  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>--}}
    {{--                            @error('name')--}}
    {{--                            <span class="invalid-feedback" role="alert">--}}
    {{--                                            <strong>{{ $message }}</strong>--}}
    {{--                                        </span>--}}
    {{--                            @enderror--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                    <div class="form-group">--}}
    {{--                        <button class="btn btn-lg btn-primary btn-block">Create Account</button>--}}
    {{--                    </div>--}}
    {{--                </form>--}}
    {{--            </div>--}}
{{--    <div class="nk-block nk-block-middle nk-auth-body  wide-xs">--}}

{{--      <div class="col-lg-12">--}}
{{--         --}}
{{--      </div>--}}
{{--    </div>--}}

{{--    <div class="nk-split nk-split-page nk-split-md">--}}
{{--        <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white w-lg-45">--}}
{{--            <div class="absolute-top-right d-lg-none p-3 p-sm-5">--}}
{{--                <a href="#" class="toggle btn btn-white btn-icon btn-light" data-target="athPromo"><em class="icon ni ni-info"></em></a>--}}
{{--            </div>--}}
{{--            <div class="nk-block nk-block-middle nk-auth-body">--}}
{{--                <div class="nk-block-head">--}}
{{--                    <div class="nk-block-head-content">--}}
{{--                        <h5 class="nk-block-title">Join our Part-time UX/UI Design Bootcamp</h5>--}}
{{--                        <div class="nk-block-des">--}}
{{--                            <p>Create New Matthens Account</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div><!-- .nk-block-head -->--}}
{{--                <form action="html/pages/auths/auth-success.html">--}}
{{--                    <div class="form-group">--}}
{{--                        <label class="form-label" for="name">Name</label>--}}
{{--                        <div class="form-control-wrap">--}}
{{--                            <input type="text" class="form-control form-control-lg" id="name" placeholder="Enter your name">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label class="form-label" for="email">Email or Username</label>--}}
{{--                        <div class="form-control-wrap">--}}
{{--                            <input type="text" class="form-control form-control-lg" id="email" placeholder="Enter your email address or username">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label class="form-label" for="password">Passcode</label>--}}
{{--                        <div class="form-control-wrap">--}}
{{--                            <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">--}}
{{--                                <em class="passcode-icon icon-show icon ni ni-eye"></em>--}}
{{--                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>--}}
{{--                            </a>--}}
{{--                            <input type="password" class="form-control form-control-lg" id="password" placeholder="Enter your passcode">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <div class="custom-control custom-control-xs custom-checkbox">--}}
{{--                            <input type="checkbox" class="custom-control-input" id="checkbox">--}}
{{--                            <label class="custom-control-label" for="checkbox">I agree to Dashlite <a tabindex="-1" href="#">Privacy Policy</a> &amp; <a tabindex="-1" href="#"> Terms.</a></label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <button class="btn btn-lg btn-primary btn-block">Register</button>--}}
{{--                    </div>--}}
{{--                </form><!-- form -->--}}
{{--                <div class="form-note-s2 pt-4"> Already have an account ? <a href="html/pages/auths/auth-login.html"><strong>Sign in instead</strong></a>--}}
{{--                </div>--}}
{{--                <div class="text-center pt-4 pb-3">--}}
{{--                    <h6 class="overline-title overline-title-sap"><span>OR</span></h6>--}}
{{--                </div>--}}

{{--            </div><!-- .nk-block -->--}}
{{--            <div class="nk-block nk-auth-footer">--}}

{{--                <div class="mt-3">--}}
{{--                    <p>By clicking the "Enroll now" button, you are enroling in a Matthens Bootcamp, and you agree to Matthens's Terms of Use and Privacy Policy.</p>--}}
{{--                </div>--}}
{{--            </div><!-- nk-block -->--}}
{{--        </div><!-- nk-split-content -->--}}
{{--        <div class="nk-split-content nk-split-stretch bg-lighter d-flex toggle-break-lg toggle-slide toggle-slide-right" data-content="athPromo" data-toggle-screen="lg" data-toggle-overlay="true">--}}
{{--            <div class="slider-wrap w-100 w-max-550px p-3 p-sm-5 m-auto">--}}
{{--                <div class="slider-init" data-slick='{"dots":true, "arrows":false}'>--}}
{{--                    <div class="slider-item">--}}
{{--                        <div class="nk-feature nk-feature-center">--}}
{{--                            <div class="nk-feature-img">--}}
{{--                                <img class="round" src="./images/slides/promo-a.png" srcset="./images/slides/promo-a2x.png 2x" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="nk-feature-content py-4 p-sm-5">--}}
{{--                                <h4>Dashlite</h4>--}}
{{--                                <p>You can start to create your products easily with its user-friendly design & most completed responsive layout.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div><!-- .slider-item -->--}}
{{--                    <div class="slider-item">--}}
{{--                        <div class="nk-feature nk-feature-center">--}}
{{--                            <div class="nk-feature-img">--}}
{{--                                <img class="round" src="./images/slides/promo-b.png" srcset="./images/slides/promo-b2x.png 2x" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="nk-feature-content py-4 p-sm-5">--}}
{{--                                <h4>Dashlite</h4>--}}
{{--                                <p>You can start to create your products easily with its user-friendly design & most completed responsive layout.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div><!-- .slider-item -->--}}
{{--                    <div class="slider-item">--}}
{{--                        <div class="nk-feature nk-feature-center">--}}
{{--                            <div class="nk-feature-img">--}}
{{--                                <img class="round" src="./images/slides/promo-c.png" srcset="./images/slides/promo-c2x.png 2x" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="nk-feature-content py-4 p-sm-5">--}}
{{--                                <h4>Dashlite</h4>--}}
{{--                                <p>You can start to create your products easily with its user-friendly design & most completed responsive layout.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div><!-- .slider-item -->--}}
{{--                </div><!-- .slider-init -->--}}
{{--                <div class="slider-dots"></div>--}}
{{--                <div class="slider-arrows"></div>--}}
{{--            </div><!-- .slider-wrap -->--}}
{{--        </div><!-- nk-split-content -->--}}
{{--    </div><!-- nk-split -->--}}
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Register') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('register') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>--}}

{{--                                @error('name')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-0">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Register') }}--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
@endsection
