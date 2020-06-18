@extends('layouts.auth')
@section('content')
<div class="card card-primary">
    <div class="card-header">{{ __('Verify Your Email Address') }}</div>
    <div class="card-body">
        @if (session('resent'))
        <div class="alert alert-success" role="alert">
            {{ __('A fresh verification link has been sent to your email address.') }}
        </div>
        @endif
        {{ __('Before proceeding, please check your email for a verification link.') }}
        {{ __('If you did not receive the email') }},
        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
            @csrf
            <button type="submit" class="btn btn-primary btn-lg btn-block">{{ __('click here to request another') }}</button>.
        </form>
    </div>
</div>
@endsection