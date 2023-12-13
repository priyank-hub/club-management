<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\membershipmst;
use App\Models\membershiptypemst;
use Carbon\Carbon;
use App\Models\membermst;
use DB;

class membership extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ms = DB::select('select * from membershiptypemsts mstype,membermsts m,membershipmsts ms
        where ms.mstypeid=mstype.id and m.membershipid=ms.id');
            // print_r($ms);
       return view("admin.membershipdisplay",compact('ms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mstype = membershiptypemst::all();
        //For Membermst table
        $ms = membershipmst::all();
        return view("admin.membership",compact('mstype'));   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ms = new membershipmst;
        $ms->name = $request->name;
        $ms->mstypeid = $request->mstypeid;
        $ms->noofdependant = $request->noofdependant;
        $ms->joiningdate = $request->joiningdate;
        $mstype = membershiptypemst::find( $request->mstypeid);
        $msyears=$mstype->noofyear;
        //print_r($mstype);
        //echo  "Years". $msyears;
        $expdate= Carbon::parse($request->joiningdate)->addyears($msyears);
        $ms->expirydate = $expdate;
        $ms->save();
       echo "mid". $ms->id;
        //for member table
        $member= new membermst;
        $member->membername=$request->name;
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';
        $n=6;
        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }
        $member->password=$randomString;
        $member->address=$request->address;
        $member->city=$request->city;
        $member->pincode=$request->pincode;
        $member->contactno=$request->contactno;
        $member->email=$request->email;
        $member->membershipid=$ms->id;
        $member->save();
        return redirect('/msmsts');
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
        
        $ms = DB::table('membershipmsts')
            ->join('membershiptypemsts','membershipmsts.mstypeid','=','membershiptypemsts.id')
            ->join('membermsts', 'membermsts.membershipid', '=', 'membershipmsts.id')
            ->where('membermsts.id','=',$id)
            ->first();
        // $ms=membershipmst::find($id);
        $mstype=membershiptypemst::all();
        //  echo $ms;
        return view("admin.membershipedit",compact('ms','mstype'));
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
        $ms = DB::table('membershipmsts')
        ->join('membershiptypemsts','membershipmsts.mstypeid','=','membershiptypemsts.id')
        ->join('membermsts', 'membermsts.membershipid', '=', 'membershipmsts.id')
        ->get();
        $ms=membershipmst::find($id);
        echo $ms;
        $ms->name=$request->input('name');
        $ms->mstypeid=$request->input('mstypeid');
        $ms->noofdependant=$request->input('noofdependant');
        $ms->joiningdate=$request->input('joiningdate');
        $mstype = membershiptypemst::find( $request->mstypeid);
        $msyears=$mstype->noofyear;
        print_r($mstype);
        echo  "Years". $msyears;
        $expdate= Carbon::parse($request->joiningdate)->addyears($msyears);
        $ms->expirydate = $expdate;

        // echo $ms->expirydate;
        $ms->update();
        $member=membermst::find($id);
        $member->membername=$request->input('name');
        $member->address=$request->input('address');
        $member->city=$request->input('city');
        $member->pincode=$request->input('pincode');
        $member->contactno=$request->input('contactno');
        $member->email=$request->input('email');
        $member->update();
        return redirect('msmsts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ms=membershipmst::find($id);
        $ms->delete();
        return redirect()->back();
    }
}