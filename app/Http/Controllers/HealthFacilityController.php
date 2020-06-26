<?php

namespace App\Http\Controllers;

use App\Health_Facility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HealthFacilityController extends Controller
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
        $facilities = Health_Facility::all();
        return view('admin.facilities.index', compact('facilities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.facilities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
        ]);

        $facility = new Health_Facility();
        $facility->name = $request->get('name');
        $facility->save();

        return Redirect::route('facilities')->with('status', 'New facility name added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Health_Facility  $health_Facility
     * @return \Illuminate\Http\Response
     */
    public function show(Health_Facility $health_Facility)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $facility
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($facility)
    {
        $facility = Health_Facility::find($facility);
        return view('admin.facilities.edit', compact('facility'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param $facility
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $facility)
    {
        $request->validate([
            'name' => 'string',
        ]);

        $input = $request->all();
        $facility = Health_Facility::find($facility);

        $facility->name = $input['name'];
        $facility->save();

        return Redirect::route('facilities')->with('status', 'New facility name updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $facility
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteFacility($facility)
    {
        $facility = Health_Facility::where('id', $facility)->delete();
        return Redirect::route('facilities')->with('status', 'facility name deleted successfully');
    }
}
