<?php

namespace App\Http\Controllers;

use App\Models\FlightCrewLicensing;
use Illuminate\Http\Request;

class FlightCrewLicensingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mflightcrewlicensings = FlightCrewLicensing::all();
        return view('flightcrewlicensing.index',[
            'flightcrewlicensings'=> $flightcrewlicensings
        ]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('flightcrewlicensing.create');
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
    
            'user_id'=> 'required',
            'condition_tree'=> 'required', 
            'invoicing_fee'=> 'required',
            'assign'=> 'required',
            'rules_check'=> 'required',
            'verify_rule'=> 'required',
        ]);
 
        $flightcrewlicensing = new FlightCrewLicensing;
        $flightcrewlicensing ->user_id= $request->user_id;
        $flightcrewlicensing ->condition_tree= $request->condition_tree;
        $flightcrewlicensing ->invoicing_fee= $request->invoicing_fee;
        $flightcrewlicensing ->assign= $request->assign;
        $flightcrewlicensing ->rules_check= $request->rules_check;
        $flightcrewlicensing ->verify_rules= $request->verify_rules;
        
        $flightcrewlicensing->save(); 
        return redirect('/flightcrewlicensings');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FlightCrewLicensing  $flightCrewLicensing
     * @return \Illuminate\Http\Response
     */
    public function show(FlightCrewLicensing $flightCrewLicensing)
    {
        return view('flightcrewlicensing.show', [
            'flightcrewlicensing'=> $flightcrewlicensing
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FlightCrewLicensing  $flightCrewLicensing
     * @return \Illuminate\Http\Response
     */
    public function edit(FlightCrewLicensing $flightCrewLicensing)
    {
        return view('flightcrewlicensing.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FlightCrewLicensing  $flightCrewLicensing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FlightCrewLicensing $flightCrewLicensing)
    {
        $flightcrewlicensing ->user_id= $request->user_id;
        $flightcrewlicensing ->condition_tree= $request->condition_tree;
        $flightcrewlicensing ->invoicing_fee= $request->invoicing_fee;
        $flightcrewlicensing ->assign= $request->assign;
        $flightcrewlicensing ->rules_check= $request->rules_check;
        $flightcrewlicensing ->verify_rules= $request->verify_rules;
        $flightcrewlicensing->save(); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FlightCrewLicensing  $flightCrewLicensing
     * @return \Illuminate\Http\Response
     */
    public function destroy(FlightCrewLicensing $flightCrewLicensing)
    {
        //
    }
}