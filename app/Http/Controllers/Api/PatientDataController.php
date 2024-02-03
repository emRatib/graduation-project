<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PatientData;
use App\Http\Resources\PatientDataResource;

class PatientDataController extends Controller
{
    // get all patient data with messages succuees and data
    public function index()
    {
        $patientdata = PatientData::all();
        // $patientdata = PatientDataResource::collection(PatientData::all());
        return response()->json([
            'status' => true,
            'message'=>'patient data',
            'data' => $patientdata
        ]);
    }


    // store new patient data
    public function store(Request $request)
    {
        $patientdata = PatientData::create($request->all());
        return response()->json([
            'status' => true,
            'message'=>'patient data created',
            'data' => $patientdata
        ]);
    }

    // get patient data by id
    public function show($id)
    {
        $patientdata = PatientData::find($id);
        // $patientdata = new PatientDataResource(PatientData::find($id));
        return response()->json([
            'status' => true,
            'message'=>'patient data founded',
            'data' => $patientdata
        ]);
    }

    // update patient data by id
    public function update(Request $request, $id)
    {
        $patientdata = PatientData::find($id);
        $patientdata->update($request->all());
        return response()->json([
            'status' => true,
            'message'=>'patient data updated',
            'data' => $patientdata
        ]);
    }



    // delete patient data by id
    public function destroy($id)
    {
        $patientdata = PatientData::find($id);
        $patientdata->delete();
        return response()->json([
            'status' => true,
            'message'=>'patient data deleted',
            'data' => $patientdata
        ]);
    }

}
