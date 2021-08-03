<?php

namespace App\Http\Controllers;

use App\Models\AirNavigationServicesPersonnel;
use Illuminate\Http\Request;

class AirNavigationServicesPersonnelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $airnavigationservicespersonnels = AirNavigationServicesPersonnel::all();
        return view('airnavigationservicespersonnel.index',[
            'airnavigationservicespersonnels'=> $airnavigationservicespersonnels
        ]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('airnavigationservicespersonnel.create');
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
           
            'nav_service_id'  => 'required',
            'rating'=> 'required',
            'unit'=> 'required',
            'checkpoint'=> 'required',
            'unit_endorsement'=>'required',
            'rules_check'=> 'required', 
        ]); 
 
        $airnavigationservicespersonnel = new AirNavigationServicesPersonnel;
        $airnavigationservicespersonnel->nav_service_id= $request->nav_service_id;
        $airnavigationservicespersonnel->rating= $request->rating;
        $airnavigationservicespersonnel->unit= $request->unit;
        $airnavigationservicespersonnel->checkpoint= $request->checkpoint;
        $airnavigationservicespersonnel->unit_endorsement= $request->unit_endorsement;
        $airnavigationservicespersonnel->rules_check= $request->rules_check;

        $airnavigationservicespersonnel->save(); 
        return redirect('/airnavigationservicespersonnels');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AirNavigationServicesPersonnel  $airNavigationServicesPersonnel
     * @return \Illuminate\Http\Response
     */
    public function show(AirNavigationServicesPersonnel $airNavigationServicesPersonnel)
    {
        return view('airnavigationservicespersonnel.show', [
            'airnavigationservicespersonnel'=> $airnavigationservicespersonnel
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AirNavigationServicesPersonnel  $airNavigationServicesPersonnel
     * @return \Illuminate\Http\Response
     */
    public function edit(AirNavigationServicesPersonnel $airNavigationServicesPersonnel)
    {
        return view('airnavigationservicespersonnel.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AirNavigationServicesPersonnel  $airNavigationServicesPersonnel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AirNavigationServicesPersonnel $airNavigationServicesPersonnel)
    {
        $airnavigationservicespersonnel ->nav_service_id= $request->nav_service_id;
        $airnavigationservicespersonnel->rating= $request->rating;
        $airnavigationservicespersonnel->unit= $request->unit;
        $airnavigationservicespersonnel->checkpoint= $request->checkpoint;
        $airnavigationservicespersonnel->unit_endorsement= $request->unit_endorsement;
        $airnavigationservicespersonnel->rules_check= $request->rules_check;

        $airnavigationservicespersonnel->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AirNavigationServicesPersonnel  $airNavigationServicesPersonnel
     * @return \Illuminate\Http\Response
     */
    public function destroy(AirNavigationServicesPersonnel $airNavigationServicesPersonnel)
    {
        //
    }
}
