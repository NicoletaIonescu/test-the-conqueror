<?php

namespace App\Http\Controllers;

use App\Models\Bundel;
use Illuminate\Http\Request;

class BundelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id = $request->user_id;
        $challenge_id = $request->challenge_id;

        $bundle = Bundel::create(['user_id' => $user_id, 'challenge_id' => $challenge_id, 'status'=>1]);
        return $bundle->id;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bundel  $bundels
     * @return \Illuminate\Http\Response
     */
    public function show(Bundel $bundels)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bundel  $bundels
     * @return \Illuminate\Http\Response
     */
    public function edit(Bundel $bundels)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bundel  $bundels
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bundel $bundels)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bundel  $bundels
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bundel $bundels)
    {
        //
    }
}
