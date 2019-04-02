@extends('layouts.app')

@section('content')
<div class="container">
    <div class="box">
      <form method="post" action="{{ route('country.search') }}">
        @csrf
        <div class="field has-addons">
          <div class="control has-icons-left">
            <input class="input" type="text" placeholder="Search Country">
            <span class="icon is-small is-left">
              <i class="fa fa-search"></i>
            </span>
          </div>
          <div class="control">
            <button  type="submit" class="button is-info">
              Search
            </button>
          </div>
        </div>
      </form>
    </div>

    <div class="box">
      <strong>Country:</strong> {{ $country['name']['common'] }} ({{ $country['name']['native']['urd']['common'] }})<br>
      <strong>Official Name:</strong> {{ $country['name']['official'] }} ({{ $country['name']['native']['urd']['official'] }})<br>
      <strong>Capital:</strong> @foreach($country['capital'] as $capital) {{ $capital }} @endforeach<br>
      <strong>Currency:</strong> @foreach($country['currencies'] as $currency) {{ $currency }} @endforeach<br>
      <strong>Flag:</strong> {{ $country['flag']['emoji'] }}<br>
      <div class="box">
        <strong>Geography</strong><br>
        <strong>Region:</strong> {{ $country['geo']['region'] }}<br>
        <strong>Sub Region:</strong> {{ $country['geo']['subregion'] }}<br>
        <strong>Area:</strong> {{ $country['geo']['area'] }} km square<br>
        <strong>Estimated Population:</strong> {{ $country['pop_est'] }}<br>
      </div>
    </div>
    <div class="box">
      <article class="media">
        <div class="media-left">
          <figure class="image is-64x64">
            <img src="https://bulma.io/images/placeholders/128x128.png" alt="Image">
          </figure>
        </div>
        <div class="media-content">
          <div class="content">
            <p>
              <strong>John Smith</strong> <small>@johnsmith</small> <small>31m</small>
              <br>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.
            </p>
          </div>
          <nav class="level is-mobile">
            <div class="level-left">
              <a class="level-item" aria-label="reply">
                <span class="icon is-small">
                  <i class="fa fa-reply" aria-hidden="true"></i>
                </span>
              </a>
              <a class="level-item" aria-label="retweet">
                <span class="icon is-small">
                  <i class="fa fa-retweet" aria-hidden="true"></i>
                </span>
              </a>
              <a class="level-item" aria-label="like">
                <span class="icon is-small">
                  <i class="fa fa-heart" aria-hidden="true"></i>
                </span>
              </a>
            </div>
          </nav>
        </div>
      </article>
    </div>
</div>
@endsection
