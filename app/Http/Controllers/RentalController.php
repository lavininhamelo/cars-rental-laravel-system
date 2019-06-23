<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rental;
use App\Vehicle;

class RentalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
    
    }
    public function rent($vehicle_id){
    	$vehicle = Vehicle::find($vehicle_id);

    	return view('rentals.rental', compact('vehicle'));
    }
    public function store(Request $request)
    {
        $date_now =  new \DateTime();
        $date = date_create_from_format("Y-m-d\TH:i", $request->return_date);
        $dates = $date_now->diff($date);
        $vehicle = Vehicle::find($request->vehicle_id);
        Rental::create([
            'vehicle_id' => $vehicle->id,
            'user_id' => $request->user_id,
            'value'=> $dates->days * $vehicle->value,
            'status'=> 'reserved',
            'return_date' => $request->return_date

        ]);

        return view('home');

    }

}
