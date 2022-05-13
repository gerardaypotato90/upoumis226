<?php

namespace App\Http\Controllers;

use App\Models\establishmentvisit;
use Illuminate\Http\Request;

class VisitController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visits = establishmentvisit::paginate();

        return view('visits.index', compact('visits'));
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
     * @param  \App\Models\establishmentvisit  $visits
     * @return \Illuminate\Http\Response
     */
    public function show(establishmentvisit $visits)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\establishmentvisit  $visits
     * @return \Illuminate\Http\Response
     */
    public function edit(establishmentvisit $visits)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\establishmentvisit  $visits
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, establishmentvisit $visits)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\establishmentvisit  $visits
     * @return \Illuminate\Http\Response
     */
    public function destroy(establishmentvisit $visits)
    {
        //
    }
}
