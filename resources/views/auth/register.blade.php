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
    <h1 class="title">{{ __('Register') }}</h1>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        
        <div class="field">
          <p class="control has-icons-left has-icons-right">
            <input class="input" type="text" name="name" value="{{ old('name') }}" placeholder="Full Name" required>
            <span class="icon is-small is-left">
              <i class="fa fa-user"></i>
            </span>
            @if($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
          </p>
        </div>

        <div class="field">
          <p class="control has-icons-left has-icons-right">
            <input class="input" type="email" name="email" value="{{ old('email') }}" placeholder="Email" required>
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
            <label class="checkbox">
              <input type="checkbox">
              I agree to the <a href="#">terms and conditions</a>
            </label>
        </div>

        <div class="field">
          <p class="control">
            <button type="submit" class="button is-primary">
              Register
            </button>
          </p>
        </div>
    </form>
  </div>
</div>
@endsection
