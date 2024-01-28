<?php

namespace App\Http\Controllers\Website;
use App\Http\Controllers\Controller;

use App\Models\PatientDiabetes;
use App\Models\PatientData;

use App\Http\Requests\StorePatientDiabetesRequest;
use App\Http\Requests\UpdatePatientDiabetesRequest;

class PatientDiabetesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = auth()->user()->id;
        $PatientData = PatientData::where('user_id', $id)->first();
        $PatientDiabetes = PatientDiabetes::where('user_id', $id)->first();
        
        if ($PatientData) {
            return view('Website.report.index',compact('PatientData','PatientDiabetes'));
        }
        return view('Website.getstart.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePatientDiabetesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePatientDiabetesRequest $request)
    {
        PatientDiabetes::create($request->all());
        return response()->json(['message' => 'Patient diabetes data saved successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PatientDiabetes  $patientDiabetes
     * @return \Illuminate\Http\Response
     */
    public function show(PatientDiabetes $patientDiabetes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PatientDiabetes  $patientDiabetes
     * @return \Illuminate\Http\Response
     */
    public function edit(PatientDiabetes $patientDiabetes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePatientDiabetesRequest  $request
     * @param  \App\Models\PatientDiabetes  $patientDiabetes
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePatientDiabetesRequest $request, PatientDiabetes $patientDiabetes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PatientDiabetes  $patientDiabetes
     * @return \Illuminate\Http\Response
     */
    public function destroy(PatientDiabetes $patientDiabetes)
    {
        //
    }
}
