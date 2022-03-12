@extends('layouts.app')

@section('content')
<div class="container">
    <div class="index_content">
        <div class="theme_index">
            <div class="grid_box">
                <div class="title_box grid_box"><h2 class="index_title">{{ __('SignIn to Your Account') }}</h2>
                <img src="{{ asset('images/illustration.png') }}" width="235" height="235" class="index_img" alt="illustration/img" /></div>

                <form method="POST" action="{{ route('login') }}" class="form">
                    @csrf
                        <div class="input_box">
                            <label for="email" class="index_title label">{{ __('Email Address') }}</label>
                            <div class="input_box_content">
                                <div class="input_box_icon">
                                    <img src="{{ asset('images/envelope.svg') }}" width="17" height="17" class="index_img" alt="illustration/img" />
                                </div>
                                <input id="email" type="email" class="input_field @error('email') is_invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                                @error('email')
                                    <span class="invalid_feedback theme_index" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="input_box">
                            <label for="password" class="index_title label">{{ __('Password') }}</label>
                            <div class="input_box_content">
                                <div class="input_box_icon">
                                    <img src="{{ asset('images/password.svg') }}" width="10" height="10" class="index_img" alt="illustration/img" />
                                </div>
                                <input id="password" type="password" class="input_field @error('password') is_invalid @enderror" name="password" required autocomplete="current-password" />

                                @error('password')
                                    <span class="invalid_feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form_actions">
                            <div class="form_submit">
                                <a href="/login" class="index_button_link">
                                    <button type="submit" class="button_theme">{{ __('Signin') }}</button>
                                </a>
                            </div>
                            <div class="form_check">
                                <input class="form_check_input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="index_title" for="remember">{{ __('Remember Me') }}</label>
                            </div>
                        </div>

                        <div class="grid_box">
                            @if (Route::has('password.request'))
                                <a class="forgot_link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                            @if (Route::has('register'))
                                <p class="account_p">Create an Account! &nbsp;<a class="forgot_link" href="{{ route('register') }}">{{ __('Sign Up') }}</a></p>
                            @endif
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
