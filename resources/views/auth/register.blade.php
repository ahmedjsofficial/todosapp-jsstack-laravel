@extends('layouts.app')

@section('content')
<div class="container">
    <div class="index_content">
        <div class="theme_index">
            <div class="grid_box">
                <div class="title_box grid_box"><h2 class="index_title">{{ __('SignUp to Create an Account') }}</h2>
                <img src="{{ asset('images/illustration.png') }}" width="230" height="230" class="index_img" alt="illustration/img" /></div>

                <form method="POST" action="{{ route('register') }}" class="form">
                    @csrf
                        <div class="input_box">
                            <label for="name" class="index_title label">{{ __('Full Name') }}</label>
                            <div class="input_box_content">
                                <div class="input_box_icon">
                                    <img src="{{ asset('images/name.svg') }}" width="15" height="15" class="index_img" alt="icon/svg" />
                                </div>
                                <input id="name" type="text" class="input_field @error('name') is_invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus />
                                @error('name')
                                    <span class="invalid_feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
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
                                <input id="password" type="password" class="input_field @error('password') is_invalid @enderror" name="password" required autocomplete="new-password" />

                                @error('password')
                                    <span class="invalid_feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="input_box">
                            <label for="password-confirm" class="index_title label">{{ __('Confirm Password') }}</label>
                            <div class="input_box_content">
                                <div class="input_box_icon">
                                    <img src="{{ asset('images/password.svg') }}" width="10" height="10" class="index_img" alt="illustration/img" />
                                </div>
                                <input id="password-confirm" type="password" class="input_field @error('password') is_invalid @enderror" name="password_confirmation" required autocomplete="new-password" />

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
                                    <button type="submit" class="button_theme">{{ __('Sign Up') }}</button>
                                </a>
                            </div>
                        </div>

                        <div class="grid_box">
                            @if (Route::has('login'))
                                <p class="account_p">Already have an Account! &nbsp;<a class="forgot_link" href="{{ route('login') }}">{{ __('Sign In') }}</a></p>
                            @endif
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
