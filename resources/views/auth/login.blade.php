@extends('layouts.auth')

@section('content')
    <div class="auth-header">{{ __('Login') }}</div>
    <form class="auth-section w-100" method="POST" action="{{ route('login') }}">
        @csrf

        <div class="mb-3 auth-input-container">
            <label for="email" class="col-form-label">{{ __('Email') }}</label>

            <div class="auth-input">
                <input id="email" type="email" class="auth-input-box w-100 @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}" placeholder="example@gmail.com" required autocomplete="email"
                    autofocus>

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
                <input id="password" type="password" class="auth-input-box w-100 @error('password') is-invalid @enderror"
                    name="password" placeholder="Input Password" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="mt-2 auth-input-container">
            <div class="row justify-content-center">
                <button type="submit" class="btn auth-submit-btn">
                    {{ __('Login') }}
                </button>

                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>
        </div>

        <div class="auth-bottom">
            <span>Don't Have An Account?</span>
            <a href="{{route("register")}}">Register Here</a>
        </div>
    </form>
@endsection
