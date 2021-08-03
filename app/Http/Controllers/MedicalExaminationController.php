<?php

namespace App\Http\Controllers;

use App\Models\MedicalExamination;
use Illuminate\Http\Request;

class MedicalExaminationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicalexaminations = MedicalExamination::all();
        return view('medicalexamination.index',[
            'medicalexaminations'=> $medicalexaminations
        ]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medicalexamination.create');
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
           
            'med_exam_id'  => 'required',
            'user_id'=> 'required',
            'med_examiner_status'=> 'required', 
            'heartbeat_rate'=> 'required',
            'weight'=> 'required',
            'bmi'=> 'required',
            'vendor_name'=> 'required',
            'department'=> 'required',
            'position'=> 'required',
            
            
        ]);
 
        $medicalexamination = new MedicalExamination;
        $medicalexamination ->med_exam_id= $request->med_exam_id;
        $medicalexamination->user_id= $request->user_id;
        $medicalexamination ->med_examiner_status= $request->med_examiner_status;
        $medicalexamination->heartbeat_rate= $request->heartbeat_rate;
        $medicalexamination->weight= $request->weight;
        $medicalexamination->bmi= $request->bmi;
        $medicalexamination->vendor_name= $request->vendor_name;
        $medicalexamination->department= $request->department;
        $medicalexamination->position= $request->position;
       
        $medicalexamination->save(); 
        return redirect('/medicalexaminations');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MedicalExamination  $medicalExamination
     * @return \Illuminate\Http\Response
     */
    public function show(MedicalExamination $medicalExamination)
    {
        return view('medicalexamination.show', [
            'medicalexamination'=> $medicalexamination
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MedicalExamination  $medicalExamination
     * @return \Illuminate\Http\Response
     */
    public function edit(MedicalExamination $medicalExamination)
    {
        return view('medicalexamination.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MedicalExamination  $medicalExamination
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MedicalExamination $medicalExamination)
    {
        $medicalexamination ->med_exam_id= $request->med_exam_id;
        $medicalexamination->user_id= $request->user_id;
        $medicalexamination ->med_examiner_status= $request->med_examiner_status;
        $medicalexamination->heartbeat_rate= $request->heartbeat_rate;
        $medicalexamination->weight= $request->weight;
        $medicalexamination->bmi= $request->bmi;
        $medicalexamination->vendor_name= $request->vendor_name;
        $medicalexamination->department= $request->department;
        $medicalexamination->position= $request->position;
       
        $medicalexamination->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MedicalExamination  $medicalExamination
     * @return \Illuminate\Http\Response
     */
    public function destroy(MedicalExamination $medicalExamination)
    {
        //
    }
}
