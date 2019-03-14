@extends('layouts.app')

@section('title')
	Home @parent
@endsection

@section('content')
<div class="columns">
  <div class="column is-7 has-background-primary">
    First column
  </div>
  <div class="column has-background-info">
    Second column
  </div>
  <div class="column has-background-success">
    Third column
  </div>
  <div class="column has-background-danger">
    Fourth column
  </div>
</div>

<div class="links">
    <a class="button is-primary is-rounded">Rounded</a>
    <a class="button is-link is-rounded">Rounded</a>
    <a class="button is-info is-rounded">Rounded</a>
    <a class="button is-success is-rounded">Rounded</a>
    <a class="button is-danger is-rounded">Rounded</a>
    <a class="button is-rounded">Rounded</a>
</div>
@endsection

@section('footer')
<footer class="footer">
  <div class="content has-text-centered">
    <p>
      <strong>Bulma</strong> by <a href="https://jgthms.com">Jeremy Thomas</a>. The source code is licensed
      <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content
      is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY NC SA 4.0</a>.
    </p>
  </div>
</footer>
@endsection