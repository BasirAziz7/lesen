<?php

namespace App\Http\Controllers;

use App\Models\AircraftMaintenancePersonnel;
use Illuminate\Http\Request;

class AircraftMaintenancePersonnelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aircraftmaintenancepersonnels = AircraftMaintenancePersonnel::all();
        return view('aircraftmaintenancepersonnel.index',[
            'aircraftmaintenancepersonnels'=> $aircraftmaintenancepersonnels
        ]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('aircraftmaintenancepersonnel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
           
            'maintenance_id'  => 'required',
            'background'=> 'required',
            'personnel'=> 'required', 
            
        ]);

        $aircraftmaintenancepersonnel = new AircraftMaintenancePersonnel;
        $aircraftmaintenancepersonnel ->maintenance_id= $request->maintenance_id;
        $aircraftmaintenancepersonnel ->background= $request->background;
        $aircraftmaintenancepersonnel ->personnel= $request->personnel;

        $aircraftmaintenancepersonnel->save(); 
        return redirect('/aircraftmaintenancepersonnels');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AircraftMaintenancePersonnel  $aircraftMaintenancePersonnel
     * @return \Illuminate\Http\Response
     */
    public function show(AircraftMaintenancePersonnel $aircraftMaintenancePersonnel)
    {
        return view('aircraftmaintenancepersonnel.show', [
            'aircraftmaintenancepersonnel'=> $aircraftmaintenancepersonnel
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AircraftMaintenancePersonnel  $aircraftMaintenancePersonnel
     * @return \Illuminate\Http\Response
     */
    public function edit(AircraftMaintenancePersonnel $aircraftMaintenancePersonnel)
    {
        return view('aircraftmaintenancepersonnel.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AircraftMaintenancePersonnel  $aircraftMaintenancePersonnel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AircraftMaintenancePersonnel $aircraftMaintenancePersonnel)
    {
        $aircraftmaintenancepersonnel ->maintenance_id= $request->maintenance_id;
        $aircraftmaintenancepersonnel ->background= $request->background;
        $aircraftmaintenancepersonnel ->personnel= $request->personnel;

        $aircraftmaintenancepersonnel->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AircraftMaintenancePersonnel  $aircraftMaintenancePersonnel
     * @return \Illuminate\Http\Response
     */
    public function destroy(AircraftMaintenancePersonnel $aircraftMaintenancePersonnel)
    {
        //
    }
}
