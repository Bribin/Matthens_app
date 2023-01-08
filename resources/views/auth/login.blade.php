@extends('layouts.guest')

@section('content')

    <div class="nk-block nk-block-middle nk-auth-body  wide-xs">

        <div class="card card-bordered">
            <div class="card-inner card-inner-lg">
                <div class="nk-block-head">
                    <div class="nk-block-head-content">
                        <h4 class="nk-block-title">Sign-In</h4>
                        <div class="nk-block-des">
                            <p>Access the Dashlite panel using your email and passcode.</p>
                        </div>
                    </div>
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <div class="form-label-group">
                            <label class="form-label" for="default-01">{{ __('Email Address') }}</label>
                        </div>
                        <div class="form-control-wrap">

                            <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror"  name="email"  value="{{ old('email') }}"  required autocomplete="email" autofocus placeholder="Enter your email address or username">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <label class="form-label" for="password">{{ __('Password') }}</label>



                        </div>
                        <div class="form-control-wrap">



                            <input id="password" type="password" class="form-control  form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror


                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-lg btn-primary btn-block">   {{ __('Login') }}</button>
                    </div>
                </form>
                @if (Route::has('password.request'))
                    <a class="link link-primary link-sm" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
                <div class="form-note-s2 text-center pt-4"> New on our platform? <a href="{{ url('/register') }}">Create an account</a>
                </div>


            </div>
        </div>
    </div>
    <!-- wrap @e -->

@endsection
