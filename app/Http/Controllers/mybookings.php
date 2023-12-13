<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bookroommst;
use App\Models\bookeventmst;
use App\Models\eventmst;
use App\Models\roomchargesmst;
use App\Models\cancellationrulemst;
use DB;

class mybookings extends Controller
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
    public function mybooking()
    {
       $memberid=session('mid');
        $bk=bookroommst::query()
      ->where('memberid', '=', "{$memberid}") 
      ->OrderByDesc('checkin')
      ->get();  

        $event=DB::table('eventmsts')
            ->join('bookeventmsts','bookeventmsts.eventid','=','eventmsts.id')
            ->where('memberid', '=', "{$memberid}")
            ->get();
       return view("user.mybookings",compact('bk','event'));
    }

    public function bkdetails($id)
    {
        session(['bid'=>$id]);
        $memberid=session('mid');
        $bk=bookroommst::query()
        ->where('id', '=', "{$id}") 
        ->get();

        $tdate=date('Y-m-d');
        // echo $tdate;
        return view("user.mrdetails",compact('bk','tdate'));
        // echo $bk;
    }

    public function cancellation($id)
    {
            $bk = bookroommst::find($id);
            // $crule = cancellationrulemst::all();
            echo $bk;

            session(['canceltype'=>$bk->roomtype]);
            session(['cancelcheckin'=>$bk->checkin]);
            session(['cancelcheckout'=>$bk->checkout]);

            $tdate=date('Y-m-d');
            $td=date_diff(new \DateTime($bk->checkin), new\DateTime($tdate))->format("%d");
            echo $td;
            echo "<br>".$bk->totalcharges;
                if($td > 30)
                {
                    $rf=$bk->totalcharges * 1;
                    echo "Hello<br>";
                    echo $rf;
                }
                elseif ($td > 15)
                {
                    $rf=$bk->totalcharges * 0.75;
                    echo "Hello<br>";
                    echo $rf;
                }
                elseif($td > 7)
                {
                    $rf=$bk->totalcharges * 0.5;
                    echo "Hello<br>";
                    echo $rf;
                }
                else
                {
                    $rf=$bk->totalcharges * 0;
                    echo "Hello<br>";
                    echo $rf;
                }
            $bk->status='Cancelled';
            $bk->update();
            session(['refundamt'=>$rf]);
            return redirect('/cancelmail');
    }

}