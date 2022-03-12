@extends('layouts.app')

@section('content')
<div class="container">
    <div class="index_content">
        <div class="theme_index">
            <div class="grid_index">
                <div class="title_box grid_box"><h2 class="index_title">{{ __('Reset Your Password') }}</h2><img src="{{ asset('images/illustration.png') }}" width="220" height="220" class="index_img" alt="illustration/img" /></div>
                
                @if (session('status'))
                    <div class="invalid_feedback theme_index" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}">
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
                        <div class="form_actions">
                            <div class="form_submit">
                                <div class="index_button_link">
                                    <button type="submit" class="button_theme">{{ __('Send Password Reset Link') }}</button>
                                </div>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
