<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicle;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('layouts.index');
    }

    public function show()
    {
        $vehicles = Vehicle::where('status_id', '=', '1')->latest('created_at')->paginate();

        return view('public', compact('vehicles'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
