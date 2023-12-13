<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\eventmst;
use App\Models\bookeventmst;
use App\Models\facilitymst;
use App\Models\bookroommst;

class showdetails extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function event()
    {
        $date=date('Y-m-d');
        // $event=eventmst::query()
        // ->where('todate', '>', "{$date}") 
        // ->get();


        // $bkevent=DB::table('eventmsts')
        // ->join('bookeventmsts','bookeventmsts.eventid','=','eventmsts.id')
        // ->get();


        $bkevent=DB::select('select b.id,b.noofmember,e.eventname,e.fromdate,e.todate,e.photo,ms.name from eventmsts e,bookeventmsts b,membershipmsts ms
        where b.eventid=e.id and ms.id=b.memberid');

        // print_r( $bkevent);
        return view("admin.showevent",compact('bkevent'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function facility()
    {
        $facility=facilitymst::all();
        return view("admin.showfacility",compact('facility'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function bkroom()
    {
        //$room=bookroommst::all();
        //echo $room;
        $date=date('Y-m-d');

        $bkroom=DB::select('select * from bookroommsts b,membershipmsts ms 
        where b.memberid=ms.id and b.checkin > ? and b.status="Booked"',[$date]);

        // $room=bookroommst::query()
        // ->where('checkout', '>', "{$date}") 
        // ->where('status','=',"Booked")
        // ->get();

        // print_r($bkroom);
        // echo "<br><br>Hello<br><br>";
        // echo $room;

        return view("admin.showroom",compact('bkroom'));
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