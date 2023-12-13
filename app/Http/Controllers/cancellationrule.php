<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cancellationrulemst;

class cancellationrule extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cr=cancellationrulemst::all();
        return view("admin.cruledisplay",compact('cr'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.crule");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cr = new cancellationrulemst;
        $cr->rules = $request->rules;
        $cr->noofdays = $request->noofdays;
        $cr->refundrate = $request->refundrate;
        $cr->save();
       // echo $request->question;
        //echo $request->answer;
        return redirect('/crulemsts');
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
        $cr=cancellationrulemst::find($id);
        return view("admin.cruleedit",compact('cr'));
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
        $cr=cancellationrulemst::find($id);
        $cr->rules=$request->input('rules');
        $cr->noofdays=$request->input('noofdays');
        $cr->refundrate=$request->input('refundrate');
        $cr->update();
        return redirect('crulemsts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cr = cancellationrulemst::find($id);
        $cr->delete();
       return redirect("crulemsts");
    }

    public function refundrate()
    {
        $cr=cancellationrulemst::all();
        return view("user.refund",compact('cr'));
    }
}
