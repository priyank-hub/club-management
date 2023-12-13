<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bookroommst;
use App\Models\roomchargesmst;
use App\Models\cancellationrulemst;
use Carbon\Carbon;
use DateTime;
use DB;

class bookroom extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bkroom=bookroommst::all();
        return view("user.bookroom",compact('bkroom'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id=session('roomid'); 
        $rc = roomchargesmst::find($id);
        $crule = cancellationrulemst::all();
        return view("user.bookroom",compact('rc','crule'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        session(['bkroomid'=> $request->roomid]);
        session(['bktype'=> $request->roomtype]);
        session(['bkdate'=> date('Y-m-d')]);
        session(['bkcheckin'=> $request->checkin]);
        session(['bkcheckout'=> $request->checkout]);
        session(['bknoofrooms'=> $request->noofrooms]);
        session(['bkadults'=> $request->adults]);
        session(['bkchildren'=> $request->children]);
        session(['bkinfants'=> $request->infants]);
        session(['bkstatus'=> 'Booked']);
        $extrabed = 0;
        if(isset($request->children)>=1)
        {
            $extrabed = 500 * $request->children;
        }
        else
        {
            $extrabed = 0;
        }
        session(['bkextrabed'=> $extrabed]);
        $amt=0;
        $tot_ser="";
        if (isset($request->dinner))
        {
            $amt=$amt + $request->dinner;
            $tot_ser=$tot_ser . " Dinner";
        }
        if (isset($request->breakfast))
        {
            $amt=$amt + $request->breakfast;
            $tot_ser=$tot_ser . " , Breakfast";
        }
        $extrafacility = $tot_ser;
        session(['bkextrafacility'=> $extrafacility]);

        $extracharges = $amt;
        session(['bkextracharges'=> $extracharges]);

        $pd=$request->pdcharges;

        if(isset($request->noofrooms)>=0)
        {
            $pd=$pd * $request->noofrooms;
        }
        $pdcharges = $pd;
        
        session(['bkpdcharges'=> $pdcharges]);

        // $td=date_diff(new \DateTime($request->checkin), new\DateTime($request->checkout))->format("%d");
        $td=date_diff(new \DateTime($request->checkin), new\DateTime($request->checkout))->format("%d");
       
        $textra=$extrabed + $extracharges + $pdcharges;
        $tpd= $td * $textra;
        session(['sstpd'=> $td]);
        $gst = ($tpd * 0.12) + $tpd;
        $totalcharges = $gst;
        session(['bktotalcharges'=> $totalcharges]);
        return redirect('/ckroom');
        
    }
    public function checkroom()
    {
         $id=session('bkroomid');
         $type=session('bktype');
         $checkin=session('bkcheckin');   
         $oldcheckin=$checkin;
         $checkout=session('bkcheckout');
         $rooms=session('bknoofrooms');
        echo $id."<br>";
        echo $type."<br>";
         echo $checkin."<br>";
         echo $rooms."<br>";
        $start=Carbon::createFromFormat('Y-m-d', $oldcheckin);
        
        $rc = DB::table('roomchargesmsts')->where([
                        ['roomchargesmsts.roomtype', '=', $type],
                        ])->first();
     print_r( $rc);
        $datetime1 = strtotime($checkin); // convert to timestamps
        $datetime2 = strtotime($checkout); // convert to timestamps
        $days = (int)(($datetime2 - $datetime1)/86400); 
        echo "<br>difference:".$days;
        $i=1;
        while($i <= $days+1)
        {
            $bkrc = DB::select('select sum(b.noofrooms) as total from roomchargesmsts r,bookroommsts b 
            where b.roomid=r.id and r.id=? and
            b.roomtype=? and
            ? between b.checkin  and b.checkout ',[$id,$type,$checkin ]);  
             print_r($bkrc);
            //echo $bkrc->noofrooms;
            $rec= $bkrc[0];
            $bkroom=$rec->total;
           print("<br>Booked Rooms ".$bkroom);
            $start=$start->addDays(1);
            
            $checkin=$start->format('Y-m-d');
            echo "<br>".$checkin;
            $availability = $rc->noofrooms - $bkroom;
            echo "<br>$availability";
            if($availability > $rooms)
            {
                 return redirect('/bkshow');
            }
            else
            {
                // echo "else Part";
                if($availability > 0)
                {

                    return redirect('/roombook')->with('status','Only ' .  $availability . '  Rooms Available');
                }
                else
                {
                   return redirect('/roombook')->with('status', 'No Rooms Available');
                    //echo "No room Available";
                }
            }

            $i = $i+ 1;
       }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $id=session('bkroomid');
        $mid=session('bkmemberid');
        $type=session('bktype');
        $bkroomdate=session('bkdate');
        $checkin=session('bkcheckin');
        $checkout=session('bkcheckout');
        $noofrooms=session('bknoofrooms');
        $adults=session('bkadults');
        $children=session('bkchildren');
        $infants=session('bkinfants');
        $status=session('bkstatus');
        //$extrabed=session('bkextrabed');
        $extrafacility=session('bkextrafacility');
        $extracharges=session('bkextracharges');
        $pdcharges=session('bkpdcharges');
        $totalcharges=session('bktotalcharges');

        $stpd=session('sstpd');
         $id=session('roomid'); 
        $rc = roomchargesmst::find($id);
        return view("user.roomconfirmation",compact('rc'));
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

    public function rmcheckout()
    {
        $totalcharges=session('bktotalcharges');
        // echo $totalcharges;
         $email=session('email');
         //echo $email;
         $redirectUrl = "";
         $redirectUrl .= "https://www.sandbox.paypal.com/cgi-bin//webscr?cmd=_xclick&business=intellectcomputerssurat-buyer@gmail.com";
         
         $redirectUrl .= "&item_name=".$email;
         $redirectUrl .= "&amount=1";
         $redirectUrl .= "&business=intellectcomputerssurat-facilitator@gmail.com";
             //If transactioin has been successfully performed, redirect SuccessURL page- this page will be designed by developer
         $redirectUrl .= "&return=http://127.0.0.1:8000/usermail";
             //If transactioin has been failed, redirect FailedURL page- this page will be designed by developer
         $redirectUrl .= "&8 _return=http://127.0.0.1:8000/failure";
         return redirect($redirectUrl);
    }
    public function success()
    {
        $bkroom=new bookroommst;
//recieve data from session
        $id=session('bkroomid');
        $memberid=session('mid');
        $type=session('bktype');
        $bkroomdate=session('bkdate');
        $checkin=session('bkcheckin');
        $checkout=session('bkcheckout');
        $noofrooms=session('bknoofrooms');
        $adults=session('bkadults');
        $children=session('bkchildren');
        $infants=session('bkinfants');
        $status=session('bkstatus');
        $extrabed=session('bkextrabed');
        $extrafacility=session('bkextrafacility');
        $extracharges=session('bkextracharges');
        $pdcharges=session('bkpdcharges');
        $totalcharges=session('bktotalcharges');

//store data in table from session 
        $bkroom->roomid=$id;
        $bkroom->memberid=$memberid;
        $bkroom->roomtype=$type;
        $bkroom->bookingdate=$bkroomdate;
        $bkroom->checkin=$checkin;
        $bkroom->checkout=$checkout;
        $bkroom->noofrooms=$noofrooms;
        $bkroom->adults=$adults;
        $bkroom->children=$children;
        $bkroom->infants=$infants;
        $bkroom->status=$status;
        $bkroom->extrabed=$extrabed;
        $bkroom->extrafacility=$extrafacility;
        $bkroom->extracharges=$extracharges;
        $bkroom->pdcharges=$pdcharges;
        $bkroom->totalcharges=$totalcharges;
        $bkroom->save();
        return view("user.success");
    }
    public function failure()
    {
        return view("user.failure");
    }
}
