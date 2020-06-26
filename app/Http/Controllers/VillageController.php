<?php

namespace App\Http\Controllers;

use App\Village;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class VillageController extends Controller
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
        $villages = Village::all();
        return view('admin.villages.index', compact('villages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.villages.create');
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
            'chief' => ['required']
        ]);

        $village = new Village();
        $village->name = $request->get('name');
        $village->chief = $request->get('chief');
        $village->save();

        return Redirect::route('villages')->with('status', 'New village name added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Village  $village
     * @return \Illuminate\Http\Response
     */
    public function show(Village $village)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Village  $village
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($village)
    {
        $village = Village::find($village);
        return view('admin.villages.edit', compact('village'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Village  $village
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $village)
    {
        $request->validate([
            'name' => 'string',
            'chief' => 'required'
        ]);

        $input = $request->all();
        $village = Village::find($village);

        $village->name = $input['name'];
        $village->chief = $input['chief'];
        $village->save();

        return Redirect::route('villages')->with('status', 'New village name updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Village  $village
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteVillage($village)
    {
        Village::where('id', $village)->delete();
        return  Redirect::route('villages')->with('status', 'The village name had been deleted successfully');
    }
}
