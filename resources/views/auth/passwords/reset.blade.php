@extends('layouts.app')

@section('content')
<div class="columns">
  <div class="column is-6">
    <section class="hero is-medium is-primary is-bold">
      <div class="hero-body">
        <div class="container">
          <h1 class="title">
            Primary bold title
          </h1>
          <h2 class="subtitle">
            Primary bold subtitle
          </h2>
        </div>
      </div>
    </section>
  </div>

  <div class="column container is-fluid">
    <h1 class="title">{{ __('Reset Password') }}</h1>
    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        
        <input type="hidden" name="token" value="{{ $token }}">

        <div class="field">
          <p class="control has-icons-left has-icons-right">
            <input class="input" type="email" value="{{ $email ?? old('email') }}" name="email" placeholder="Email" required>
            <span class="icon is-small is-left">
              <i class="fa fa-envelope"></i>
            </span>
            @if($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
          </p>
        </div>

        <div class="field">
          <p class="control has-icons-left">
            <input class="input" type="password" name="password" placeholder="Password" required>
            <span class="icon is-small is-left">
              <i class="fa fa-lock"></i>
            </span>
            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
          </p>
        </div>

        <div class="field">
          <p class="control has-icons-left">
            <input class="input" type="password" name="password_confirmation" placeholder="Confirm Password" required>
            <span class="icon is-small is-left">
              <i class="fa fa-lock"></i>
            </span>
          </p>
        </div>

        <div class="field">
          <p class="control">
            <button type="submit" class="button is-primary">
              {{ __('Reset Password') }}
            </button>
          </p>
        </div>
    </form>
  </div>
</div>
@endsection
