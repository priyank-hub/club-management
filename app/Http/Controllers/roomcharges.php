<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\roomchargesmst;
use App\Models\bookroommst;
use Carbon\Carbon;
use DB;

class roomcharges extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rc=roomchargesmst::all();
        return view("admin.roomchargesdisplay",compact('rc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.roomcharges");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->file())
        {
            $filename1 = time().'_'.$request->photo1->getClientOriginalName();
            $filepath1 = $request->file('photo1')->storeAs('images',$filename1,'public');
            $filename2 = time().'_'.$request->photo2->getClientOriginalName();
            $filepath2 = $request->file('photo2')->storeAs('images',$filename2,'public');
            $filename3 = time().'_'.$request->photo3->getClientOriginalName();
            $filepath3 = $request->file('photo3')->storeAs('images',$filename3,'public');
    
            $rc = new roomchargesmst;
            $rc->roomtype=$request->roomtype;
            $rc->charges=$request->charges;
            $rc->noofrooms=$request->noofrooms;
            $rc->description=$request->description;
            $rc->photo1=$filepath1;
            $rc->photo2=$filepath2;
            $rc->photo3=$filepath3;
            $rc->save();
            return redirect('/rcmsts');
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
        $rc = roomchargesmst::all();
        return view("user.rcshow",compact('rc'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rc=roomchargesmst::find($id);
        return view("admin.roomchargesedit",compact('rc'));
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
        if($request->file())
        {
            $filename1 = time().'_'.$request->photo1->getClientOriginalName();
            $filepath1 = $request->file('photo1')->storeAs('images',$filename1,'public');
            $filename2 = time().'_'.$request->photo2->getClientOriginalName();
            $filepath2 = $request->file('photo2')->storeAs('images',$filename2,'public');
            $filename3 = time().'_'.$request->photo3->getClientOriginalName();
            $filepath3 = $request->file('photo3')->storeAs('images',$filename3,'public');

        $rc=roomchargesmst::find($id);
        $rc->roomtype=$request->input('roomtype');
        $rc->charges=$request->input('charges');
        $rc->noofrooms=$request->input('noofrooms');
        $rc->description=$request->input('description');
        $rc->photo1=$filepath1;
        $rc->photo2=$filepath2;
        $rc->photo3=$filepath3;
        $rc->update();

        return redirect("/rcmsts");
          
        }
        else
        {
            $rc=roomchargesmst::find($id);
            $rc->roomtype=$request->input('roomtype');
            $rc->charges=$request->input('charges');
            $rc->noofrooms=$request->input('noofrooms');
            $rc->description=$request->input('description');
            $rc->update();

        return redirect("/rcmsts");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rc = roomchargesmst::find($id);
        $rc->delete();
       return redirect("rcmsts");
    }

    public function details($id)
    {
        $rc = roomchargesmst::find($id);
        session(['roomid'=> $id]);
        return view("user.rcdetails",compact('rc'));
    }
    
    public function roombook()
    {
        $rc = roomchargesmst::all();
        $mname=session('membername');
        // echo $mname;
        if ($mname!=null)
        {
            return redirect('/roombook');
        }
        else
        {
            session(['cpage'=>"room"]);
            return view("user.userlogin",compact('rc')); 
        }
    }
    public function todayroombooking()
    {
      $date=date('Y-m-d');
    
      $bkroom=DB::select('select * from bookroommsts b,membershipmsts ms 
        where b.memberid=ms.id and b.checkin = ? and b.status="Booked"',[$date]);

        // print_r( $bkroom);
        return view("admin.todayrmbooking",compact('bkroom'));
    }
    public function rmbookdisplay()
    {
        $bkroom= bookroommst::all();

        $bkroom=DB::select('select * from bookroommsts b,membershipmsts ms 
        where b.memberid=ms.id ');
        // print_r( $bkroom);
        return view("admin.rmbookdisplay",compact('bkroom'));
    }
}