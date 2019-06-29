<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RentalAgency;


class RentalAgencyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agencies = RentalAgency::latest()->paginate(10);
        return view('rentalagency.index', compact('agencies'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      //  $this->authorize('create', RentalAgency::class);
        return view('rentalagency.create'); //implementar view
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
            'name' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'country' => 'required|string',
            'location' => 'required|string',
            'CNPJ' => 'required|string|size:14',
        ]);

        RentalAgency::create($request->all());

        return redirect()->route('rentalagency.index')
        ->with('success', 'Agência criada com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //implementar visualização individual e sua view
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id = RentalAgency::find($id);
        return view ('rentalagency.edit')->with('agency', $id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'country' => 'required|string',
            'location' => 'required|string',
            'CNPJ' => 'required|string|size:14',
        ]);
        $agency = RentalAgency::find($id);
        $agency->update($request->all());

        return redirect()->route('rentalagency.index')
            ->with('success', 'Agência atualizada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
