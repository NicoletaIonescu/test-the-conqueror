<?php

namespace App\Http\Controllers;
use App\Models\Challange;
use App\Http\Resources\Challange as ChallangesResource;
use Illuminate\Http\Request;

class ChallangesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user_id = $request->user_id;
        $challenges = Challange::select('challanges.*', 'bundels.added', 'bundels.completed')
            ->leftJoin('bundels', function ($join) use ($user_id) {
                $join->on('challanges.id', '=', 'bundels.challenge_id');
                $join->on('bundels.user_id', '=', \DB::raw("'".$user_id."'"));
            })
            ->get();
        return ChallangesResource::collection($challenges);
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
     * @param  \App\Models\Challange  $challanges
     * @return \Illuminate\Http\Response
     */
    public function show(Challange $challanges)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Challange  $challanges
     * @return \Illuminate\Http\Response
     */
    public function edit(Challange $challanges)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Challange  $challanges
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Challange $challanges)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Challange  $challanges
     * @return \Illuminate\Http\Response
     */
    public function destroy(Challange $challanges)
    {
        //
    }
}
