@extends('layouts.auth')
@section('content')
<div class="card card-primary">
    <div class="card-header">{{ __('Confirm Password') }}</div>
    <div class="card-body">
        {{ __('Please confirm your password before continuing.') }}
        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf
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
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg btn-block">
                {{ __('Confirm Password') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection