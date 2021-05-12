<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        $latitude='-23.52710718577365';
        $longitude='-46.69994882618741';

        return view('home', compact('latitude', 'longitude'));
    }

    public function modelo1(Request $request)
    {
        dd($request);
    }

    public function modelo2(Request $request)
    {
        dd($request);
    }
}
