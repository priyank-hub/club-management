<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\membershipmst;
use App\Models\membershiptypemst;
use Carbon\Carbon;
use App\Models\membermst;
use DB;

class userlogin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function profile()
    {
        $mname=session('membername');

        $ms = DB::table('membermsts')
            ->join('membershipmsts', 'membermsts.membershipid', '=', 'membershipmsts.id')
            ->join('membershiptypemsts','membershipmsts.mstypeid','=','membershiptypemsts.id')
            ->where('membermsts.membername','=',$mname)
            ->first();
        //  echo $ms;
        $dd = DB::table('dependentmsts')
            ->join('membershipmsts','dependentmsts.membershipid','=','membershipmsts.id')
            ->where('membershipmsts.name','=',$mname)
            ->get();
            //  echo $dd;
          return view("user.userprofile",compact('ms','dd'));
    }
    
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
    public function login()
    {
         $member = membermst::all();
        return view("user.userlogin",compact('member'));   
    }
    public function store(Request $request)
    {
      
        $member = DB::table('membermsts')->where([
            ['email', '=', $request->email],
            ['password', '=',$request->password],
        ])->first();
         $cpage=session('cpage'); 
            // print_r($member);
            // print($cpage);
          if($member!=null)
          {
            session(['membername'=>$member->membername]);
            session(['mid'=>$member->id]);
            session(['email'=>$member->email]);
           
            if($cpage == "room")
            {
                return redirect('/roombook');
            }
            elseif($cpage == "event")
            {
                return redirect('/bookevent');
            }
            else
            {
                return redirect('/home');
            }
            // return redirect('/bookevent');
        }
        else
        {
            return view("user.userlogin");
        }
    }
    public function logout()
    {
        session()->forget('email');
        session()->forget('mid');
        session()->forget('membername');
        return redirect("login");
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