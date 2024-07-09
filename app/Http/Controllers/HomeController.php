<?php

namespace App\Http\Controllers;

use App\Models\alternatif;
use App\Models\kriteria;
use App\Models\subkriteria;
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
        $kriteria = kriteria::count();
        $alternatif = alternatif::count();
        $subkriteria = subkriteria::count();
        return view('home', compact('kriteria', 'alternatif','subkriteria'));
    }
}
