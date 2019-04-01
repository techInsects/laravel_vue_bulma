@extends('layouts.app')

@section('content')
<div class="columns">
    <div class="column">
        <section class="hero is-medium is-primary is-bold">
          <div class="hero-body">
            <div class="container">
              <h1 class="title">
                {{ __('Verify Your Email Address') }}
              </h1>
              <h2 class="subtitle">
                @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                @endif
              </h2>
              <p>
                {{ __('Before proceeding, please check your email for a verification link.') }}
                {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.                      
              </p>
            </div>
          </div>
        </section>
    </div>
</div>
@endsection
