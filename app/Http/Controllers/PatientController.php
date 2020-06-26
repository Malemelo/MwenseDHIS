<?php

namespace App\Http\Controllers;

use App\Health_Facility;
use App\Patient;
use App\Village;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class PatientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $patients = Patient::all();
        return view('admin.patients.index', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $villages = Village::all();
        $health_facilities = Health_Facility::all();
        return view('admin.patients.create')->with([
            'villages' => $villages,
            'health_facilities' => $health_facilities
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'patient_name' => ['required', 'string', 'max:200'],
            'sex' => ['required', 'string', 'max:200'],
            'dob' => ['required', 'max:200'],
            'landmark_location' => ['required', 'string', 'max:200'],
            'next_of_keen' => ['required', 'string', 'max:200'],
            'next_of_keen_relationship' => ['required'],
        ]);
        ($request->all());
        $patient = new Patient();
        $patient->patient_name = $request->get('patient_name');
        $patient->sex = $request->get('sex');
        $patient->dob = $request->get('dob');
        $patient->phone_number = $request->get('phone_number');
        $patient->village_id = $request->get('village_id');
        $patient->landmark_location = $request->get('landmark_location');
        $patient->next_of_keen = $request->get('next_of_keen');
        $patient->next_of_keen_relationship = $request->get('next_of_keen_relationship');
        $patient->next_of_keen_phone = $request->get('next_of_keen_phone');
        $patient->health_worker_id = $request->get('health_worker_id');
        $patient->nearest_health_facility_id = $request->get('nearest_health_facility_id');


        $patient->save();

        return Redirect::route('patients')->with('status', 'New patient added successfully, enjoy working');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Patient $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Patient $patient
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($patient)
    {
        $villages = Village::all();
        $health_facilities = Health_Facility::all();
        $patient = Patient::find($patient);
        return view('admin.patients.edit')->with([
            'villages' => $villages,
            'health_facilities'=> $health_facilities,
            'patient' => $patient
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Patient $patient
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $patient)
    {
        $request->validate([
            'patient_name' => ['required', 'string', 'max:200'],
            'sex' => ['required', 'string', 'max:200'],
            'dob' => ['required', 'max:200'],
            'landmark_location' => ['required', 'string', 'max:200'],
            'health_worker_id' => ['required'],
            'nearest_health_facility_id' => ['required'],
        ]);

        $input = $request->all();
        $patient = Patient::find($patient);
        $patient->patient_name = $input['patient_name'];
        $patient->sex = $input['sex'];
        $patient->dob = $input['dob'];
        $patient->phone_number = $input['phone_number'];
        $patient->village_id = $input['village_id'];
        $patient->landmark_location = $input['landmark_location'];
        $patient->next_of_keen = $input['next_of_keen'];
        $patient->next_of_keen_relationship = $input['next_of_keen_relationship'];
        $patient->next_of_keen_phone = $input['next_of_keen_phone'];
        $patient->nearest_health_facility_id = $input['nearest_health_facility_id'];
        $patient->save();

        return Redirect::route('patients')->with('status', 'New book updated successfully, enjoy working');
    }

    public function deletePatient($patient){
        Patient::where('id', $patient)->delete();
        return Redirect::route('patients')->with('status', 'Patient record deleted successfully');
    }
}



