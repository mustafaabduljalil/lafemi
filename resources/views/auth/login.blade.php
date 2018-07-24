@extends('layouts.master')

@section('content')
    <!-- SECTION HEADLINE -->
    <div class="section-headline-wrap">
        <div class="section-headline">
            <h2>{{ __('Login') }}</h2>
            <p>Home<span class="separator">/</span><span class="current-section">{{ __('Login') }}</span></p>
        </div>
    </div>
    <!-- /SECTION HEADLINE -->

    <!-- SECTION -->
    <div class="section-wrap">
        <div class="section demo">
            <!-- FORM POPUP -->
            <div class="form-popup">
                <!-- FORM POPUP CONTENT -->
                <div class="form-popup-content">
                    <h4 class="popup-title">Login to your Account</h4>
                    <!-- LINE SEPARATOR -->
                    <hr class="line-separator">
                    <!-- /LINE SEPARATOR -->

                    <form id="login-form" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <label for="email" class="rl-label">{{ __('E-Mail Address') }}</label>

                        <input id="email" type="email" placeholder="Enter your email address here..." class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif

                        <label for="password" class="rl-label">Password</label>
               
                        <input id="password" type="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif

                        <!-- CHECKBOX -->
                        <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}> 
                        
                        <label for="remember" class="label-check">
                            <span class="checkbox primary primary"><span></span></span>
                            
                            {{ __('Remember Me') }}
                        </label>
                        <!-- /CHECKBOX -->

                        <p>Forgot your password? <a href="{{ route('password.request') }}" class="primary">Click here!</a></p>

                        <button type="submit" class="button mid dark">{{ __('Login') }} <span class="primary">Now!</span></button>
                    </form>
                    <!-- LINE SEPARATOR -->
                    <hr class="line-separator double">
                    <!-- /LINE SEPARATOR -->
                    <a href="{{ url('/auth/facebook') }}" class="button mid fb half">Login with Facebook</a>
                    <a href="{{ url('/auth/twitter') }}" class="button mid twt half">Login with Twitter</a>
                </div>
                <!-- /FORM POPUP CONTENT -->
            </div>
            <!-- /FORM POPUP -->
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- /SECTION -->
@endsection
