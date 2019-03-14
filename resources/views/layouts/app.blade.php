<!doctype html>
<html class="no-js" lang="{{ app()->getLocale() }}">

<head>
    <title>
      @section('title')
      | {{ config('app.name') }}
      @show
    </title>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="{{ config('app.name') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Stylesheet -->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <!-- For page wise scripts -->
    @yield('page_styles')
</head>

<body>
<div>
  <header>
    <nav class="navbar" role="navigation" aria-label="main navigation">
      <div class="navbar-brand">
        <a class="navbar-item" href="https://bulma.io">
          <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
        </a>

        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
        </a>
      </div>

      <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
          <a class="navbar-item">
            Home
          </a>

          <a class="navbar-item">
            Documentation
          </a>

          <div class="navbar-item has-dropdown is-hoverable">
            <a class="navbar-link">
              More
            </a>

            <div class="navbar-dropdown">
              <a class="navbar-item">
                About
              </a>
              <a class="navbar-item">
                Jobs
              </a>
              <a class="navbar-item">
                Contact
              </a>
              <hr class="navbar-divider">
              <a class="navbar-item">
                Report an issue
              </a>
            </div>
          </div>
        </div>

        <div class="navbar-end">
          <div class="navbar-item">
            <div class="buttons">
              <a class="button is-primary">
                <strong>Sign up</strong>
              </a>
              <a class="button is-light">
                Log in
              </a>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <div id="splash" align="center">
    <progress class="progress is-small is-primary" max="100">15%</progress>
  </div>

  <main id="app" style="display:none;">
    @yield('content')
  </main>

  @yield('footer')
</div>

<!-- Scripts Section -->    
<script src="{{ URL::asset('js/app.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>

<script>
$(window).on('load',function(){
  $("#splash").css('display','none');
  $("#app, #main-footer").fadeIn('slow');
});

</script>

<!-- For page wise scripts -->
@yield('page_scripts')
</body>
</html>
