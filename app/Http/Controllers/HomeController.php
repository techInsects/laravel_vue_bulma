<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PragmaRX\Countries\Package\Countries;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $country = Countries::where('name.common', 'Pakistan')->first();

        return view('home', compact('country'));
    }

    public function search_country()
    {
        $keyword = request()->input('keyword');

        $country = Countries::where('name.common','like', '%'.$keyword.'%')->first();
        return $country;
        return view('home', compact('country'));
    }
}
