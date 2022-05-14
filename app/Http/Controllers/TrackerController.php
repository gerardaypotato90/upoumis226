<?php

namespace App\Http\Controllers;

use App\Models\exposure;
use App\Models\User;
use Illuminate\Http\Request;
use Hash;
use Session;
use Auth;

class TrackerController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $tracked = exposure::where('userid', Auth::user()->id)
            ->paginate();

        return view('visits.tracker', compact('tracked'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\exposure  $tracked
     * @return \Illuminate\Http\Response
     */
    public function show(exposure $tracked)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\exposure  $tracked
     * @return \Illuminate\Http\Response
     */
    public function edit(exposure $tracked)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\exposure  $tracked
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, exposure $tracked)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\exposure  $tracked
     * @return \Illuminate\Http\Response
     */
    public function destroy(exposure $tracked)
    {
        //
    }
}
