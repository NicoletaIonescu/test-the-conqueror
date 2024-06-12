<?php

namespace App\Http\Controllers;

use App\Models\Bundel;
use Illuminate\Http\Request;
use App\Http\Resources\Challange as ChallangesResource;

class BundelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return
     */
    public function index(Request $request)
    {
        $user_id = $request->user_id;

        $challenges = Bundel::select(['challanges.*', 'bundels.added', 'bundels.completed'])
            ->leftJoin('challanges',function($join) {
            $join->on('challanges.id', '=', 'bundels.challenge_id');
            })
            ->where('user_id', $user_id)
            ->get();

        return ChallangesResource::collection($challenges);

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
