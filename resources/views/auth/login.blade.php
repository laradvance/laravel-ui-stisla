@extends('layouts.auth')
@section('content')
<div class="card card-primary">
    <div class="card-header">{{ __('Login') }}</div>
    <div class="card-body">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label for="email">{{ __('E-Mail Address') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus tabindex="1">
                @error('email')
                <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <div class="d-block">
                    <label for="password">{{ __('Password') }}</label>
                    <div class="float-right">
                        @if (Route::has('password.request'))
                        <a class="text-small" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                        </a>
                        @endif
                    </div>
                </div>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" tabindex="2">
                @error('password')
                <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" tabindex="3" type="checkbox" name="remember" id="remember-me" {{ old('remember') ? 'checked' : '' }}>
                    <label class="custom-control-label" for="remember-me">
                    {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                {{ __('Login') }}
                </button>
            </div>
        </form>
    </div>
</div>
@if (Route::has('register'))
<div class="mt-5 text-muted text-center">
    Don't have an account? <a href="{{ route('register') }}">{{ __('Register') }}</a>
</div>
@endif
@endsection