<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoretownshipRequest;
use App\Http\Requests\UpdatetownshipRequest;
use App\Models\township;

class TownshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoretownshipRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoretownshipRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\township  $township
     * @return \Illuminate\Http\Response
     */
    public function show(township $township)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\township  $township
     * @return \Illuminate\Http\Response
     */
    public function edit(township $township)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetownshipRequest  $request
     * @param  \App\Models\township  $township
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatetownshipRequest $request, township $township)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\township  $township
     * @return \Illuminate\Http\Response
     */
    public function destroy(township $township)
    {
        //
    }
}
