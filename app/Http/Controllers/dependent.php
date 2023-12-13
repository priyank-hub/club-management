<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dependentmst;
use App\Models\membershipmst;
use DB;

class dependent extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $dd=dependentmst::all();
        $dd = DB::select('select * from membershipmsts m,dependentmsts d 
            where d.membershipid=m.id'
            );  
        //     print_r($dd);
         return view("admin.dependentdisplay",compact('dd')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ms=membershipmst::all();
        return view("admin.dependent",compact('ms'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'dname' => 'required',
            'membershipid' => 'required',
            'relation' => 'required',
            'birthdate' => 'required'
        ]);
        $dd = new dependentmst;
        $dd->dname=$request->dname;
        $dd->membershipid=$request->membershipid;
        $dd->relation=$request->relation;
        $dd->birthdate=$request->birthdate;
        $dd->save();

        return redirect('/ddmsts');
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
        $ms=membershipmst::all();
        $dd=dependentmst::find($id);
        return view("admin.dependentedit",compact('dd','ms'));
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
        $dd=dependentmst::find($id);
        $dd->dname=$request->input('dname');
        $dd->membershipid=$request->input('membershipid');
        $dd->relation=$request->input('relation');
        $dd->birthdate=$request->input('birthdate');
        $dd->update();

        return redirect('ddmsts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dd=dependentmst::find($id);
        $dd->delete();
        return redirect()->back();
    }
}
