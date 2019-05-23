<?php

namespace App\Http\Controllers;

use App\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
	    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
    	$vehicles = Vehicle::latest()->paginate(10);
    	return view('vehicles.index',compact('vehicles'))->with('i',(request()->input('page',1)-1)*5);
    }
       /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
    	return view('vehicles.create');
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'rental_agency_id' => 'required|integer',
            'manufacturer' => 'required|string',
            'model' => 'required|string',
            'year' => 'required',
            'chassi' => 'required|string|size:11',
            'status_id' => 'required|integer',
        ]);
  
        Vehicle::create($request->all());
   
        return redirect()->route('vehicles.index')
                        ->with('success','Vehicle created successfully.');
    }
}
