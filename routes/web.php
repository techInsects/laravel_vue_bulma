<?php
Route::get('/logout', function () {
    Auth()->logout();
    return redirect('/home');
});

Route::get('/email_verify', function () {
    return view('auth.verify');
});

Route::get('/password_reset_email', function () {
    return view('auth.passwords.email');
});

Route::get('/password_reset', function () {
    return view('auth.passwords.reset')->with(['token'=>'3r3kr3kjf3kj']);
});

Route::post('/search_country', 'HomeController@search_country')->name('country.search');

/////////////////////////////////////////////////////////////////////////

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home.index');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
