<?php

namespace App\Http\Controllers;

use App\Non_Communicable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class NonCommunicableController extends Controller
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
        $non_communicables = Non_Communicable::all();
        return view('admin.diseases.non_communicable.index', compact('non_communicables'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.diseases.non_communicable.create');
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

        $non_communicable = new Non_Communicable();
        $non_communicable->name = $request->get('name');
        $non_communicable->save();

        return Redirect::route('non_communicables')->with('status', 'New disease name added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Non_Communicable  $non_Communicable
     * @return \Illuminate\Http\Response
     */
    public function show(Non_Communicable $non_Communicable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $non_communicable
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($non_communicable)
    {
        $non_communicable = Non_Communicable::find($non_communicable);
        return view('admin.diseases.non_communicable.edit', compact('non_communicable'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param $non_communicable
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $non_communicable)
    {
        $request->validate([
            'name' => 'string',
        ]);

        $input = $request->all();
        $non_communicable = Non_Communicable::find($non_communicable);

        $non_communicable->name = $input['name'];
        $non_communicable->save();

        return Redirect::route('non_communicables')->with('status', 'New village name updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Non_Communicable  $non_Communicable
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteDisease($non_Communicable)
    {
        $non_Communicable = Non_Communicable::where('id', $non_Communicable)->delete();
        return Redirect::route('non_communicables')->with('status', 'Disease name added successfully');
    }
}
