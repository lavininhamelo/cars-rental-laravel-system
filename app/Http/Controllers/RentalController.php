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

    private function calculateValueRental($vehicle_value, $end_date, $start_at = null)
    {
        var_dump($start_at);
        $start_at == null ? $start_at =  new \DateTime() : $start_at = date_create_from_format("Y-m-d H:i:s", $start_at);
        $date = date_create_from_format("Y-m-d\TH:i", $end_date);
        $dates = $start_at->diff($date);
        $dates->days == 0 ? $value = $vehicle_value : $value =  $vehicle_value * $dates->days;
        return $value;
    }
    public function index()
    {
        $rentals = Rental::getRentals();
        $date = new \DateTime();
        $date = $date->format('Y-m-d\TH:i');
        return view('rentals.index', compact('rentals', 'date'))->with('i', (request()->input('page', 1) - 1) * 5);
        $vehicles = Vehicle::where('status_id', '=', '1')->latest('created_at')->paginate(5);
    }
    public function rent($vehicle_id)
    {
        $vehicle = Vehicle::find($vehicle_id);
        $date = new \DateTime();
        $date = $date->format('Y-m-d\TH:i');

        return view('rentals.rental', compact('vehicle', 'date'));
    }
    public function update(Request $request, Rental $rental)
    {
        $vehicle = Vehicle::find($rental->vehicle_id);
        if (!empty($request->status)) {
            if ($request->status == 'lesead') {
                $vehicle->update([
                    'status_id' => '3'
                ]);
            } else {
                $vehicle->update([
                    'status_id' => '5'
                ]);
            }
        }
        if (!empty($request->return_date)) {

            $rental->update([
                'value' => $this->calculateValueRental($vehicle->value, $request->return_date, $rental->return_date)
            ]);
        }
        $rental->update($request->all());

        return redirect()->route('rentals.index')
            ->with('success', 'Pagamento Realizado com sucesso');
    }
    public function store(Request $request)
    {
        $vehicle = Vehicle::find($request->vehicle_id);


        $vehicle->update([
            'status_id' => 4
        ]);
        Rental::create([
            'vehicle_id' => $vehicle->id,
            'user_id' => $request->user_id,
            'value' => $this->calculateValueRental($vehicle->value, $request->return_date),
            'status' => 'reserved',
            'return_date' => $request->return_date

        ]);

        return redirect()->route('rentals.index')
            ->with('success', 'Pagamento Realizado com sucesso');
    }
}
