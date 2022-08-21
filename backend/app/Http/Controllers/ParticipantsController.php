<?php

namespace App\Http\Controllers;

use App\Models\Participants;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ParticipantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response(Participants::all(), 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): Response
    {
        return response(
            Participants::create($request->all()),201
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Participants  $participants
     * @return \Illuminate\Http\Response
     */
    public function show(Participants $participants)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Participants  $participants
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Participants $participants)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Participants  $participants
     * @return \Illuminate\Http\Response
     */
    public function destroy(Participants $participants)
    {
        //
    }
}
