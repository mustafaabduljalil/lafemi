@extends('layouts.master')

@section('content')
    <!-- SECTION HEADLINE -->
    <div class="section-headline-wrap">
        <div class="section-headline">
            <h2>{{ __('Register') }}</h2>
            <p>Home<span class="separator">/</span><span class="current-section">{{ __('Register') }}</span></p>
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
                    <h4 class="popup-title">{{ __('Register') }}</h4>
                    <!-- LINE SEPARATOR -->
                    <hr class="line-separator">
                    <!-- /LINE SEPARATOR -->

                    <form id="register-form" method="post" action="{{ route('register') }}">
                        @csrf
                        
                        <label for="email_address2" class="rl-label required">Email Address</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email address here...">
                        
                        <label for="username2" class="rl-label">Username</label>
                        <input type="text" id="name" name="name" placeholder="Enter your username here...">
                        
                        <label for="password2" class="rl-label required">Password</label>
                        <input type="password" id="password" name="password" placeholder="Enter your password here...">
                        
                        <label for="repeat_password2" class="rl-label required">Repeat Password</label>
                        <input type="password" id="password-confirm" name="password_confirmation" placeholder="Repeat your password here...">
                        
                        <label class="rl-label"><input type="radio" value="2" name="user_role" checked style="input[type='radio']">
                        Normal User</label>
                        <label class="rl-label"><input type="radio" value="3" name="user_role" style="input[type='radio']">
                        Provider</label>

                        <button type="submit" class="button mid dark">Register <span class="primary">Now!</span></button>
        		    </form>
                </div>
                <!-- /FORM POPUP CONTENT -->
            </div>
            <!-- /FORM POPUP -->
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- /SECTION -->
@endsection

@section('styles')


<style>

input[type="radio"], input[type="checkbox"] {
    display: inline;
}
</style>
@endsection