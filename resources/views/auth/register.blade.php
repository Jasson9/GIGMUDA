@extends('layouts.auth')

@section('content')
    <div class="auth-header">{{ __('Register') }}</div>

    <form class="auth-section w-100" method="POST" action="{{ route('register') }}">
        @csrf

        <div class="mb-3 auth-input-container">
            <label for="name" class="col-form-label">{{ __('Name') }}</label>

            <div class="auth-input">
                <input id="name" type="text" class="auth-input-box w-100 @error('name') is-invalid @enderror" name="name"
                    value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="mb-3 auth-input-container">
            <label for="email" class="col-form-label">{{ __('Email Address') }}</label>

            <div class="auth-input">
                <input id="email" type="email" class="auth-input-box @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}" placeholder="example@gmail.com" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="mb-3 auth-input-container">
            <label for="password" class="col-form-label">{{ __('Password') }}</label>

            <div class="auth-input">
                <input id="password" type="password" class="auth-input-box @error('password') is-invalid @enderror"
                    name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="mb-3 auth-input-container">
            <label for="password-confirm" class="col-form-label">{{ __('Confirm Password') }}</label>

            <div class="auth-input">
                <input id="password-confirm" type="password" class="auth-input-box" name="password_confirmation" required
                    autocomplete="new-password">
            </div>
        </div>

        <div class="mt-2 auth-input-container">
            <div class="row justify-content-center">
                <button type="submit" class="btn auth-submit-btn">
                    {{ __('Register') }}
                </button>
            </div>
        </div>

        <div class="auth-bottom auth-bottom-2">
            <span>Already Have An Account?</span>
            <a href="{{route("login")}}">Login Here</a>
        </div>
    </form>
@endsection
