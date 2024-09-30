@extends('layouts.auth')

@section('content')
    <div class="auth-header">{{ __('Reset Password') }}</div>

    <form class="auth-section w-100" method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="mb-3 auth-input-container">
            <label for="email" class="col-form-label">{{ __('Email Address') }}</label>

            <div class="auth-input">
                <input id="email" type="email" class="auth-input-box w-100 @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="mt-2 auth-input-container">
            <div class="row justify-content-center">
                <button type="submit" class="btn auth-submit-btn">
                    {{ __('Send Password Reset Link') }}
                </button>
            </div>
        </div>

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <div class="mt-lg-1 auth-bottom ">
            <span>Remember Your Password?</span>
            <a href="{{route("login")}}">Login Here</a>
        </div>
    </form>
@endsection
