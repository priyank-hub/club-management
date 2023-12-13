<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bookeventmst;
use App\Models\eventmst;

//use App\Http\Controllers\Session

class bookevent extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $bkevent=bookeventmst::all();
        // return view("user.eventregis",compact('bkevent'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id=session('eventid'); 
        $event = eventmst::find($id);
        // echo $event;
        session(['eventname'=> $event->eventname]);
        session(['eventdate'=> $event->fromdate]);
        session(['eventtime'=> $event->starttime]);

        return view("user.eventregis",compact('event'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $memberid=session('mid');
        $bkevent = new bookeventmst;
        $bkevent->eventid = $request->eventid;
        $bkevent->memberid = $memberid;
        $bkevent->noofmember = $request->noofmember;
        $bkevent->save();
        // echo $bkevent;
        session(['eventmember'=> $request->noofmember]);
        return redirect('/eventmail');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}